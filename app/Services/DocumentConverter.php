<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DocumentConverter
{
    /**
     * Convert a file to PDF using LibreOffice.
     *
     * @param string $sourcePath Full path to the source file
     * @param string $outputDir Directory where the PDF should be placed
     * @return string|null Full path to the converted PDF, or null on failure
     */
    public static function convertToPdf($sourcePath, $outputDir)
    {
        if (!file_exists($sourcePath)) {
            return null;
        }

        // Check if shell execution is likely disabled (InfinityFree etc)
        if (!function_exists('proc_open')) {
            Log::warning('PDF Conversion skipped: proc_open is disabled on this server.');
            return null;
        }

        try {
            // soffice --headless --convert-to pdf --outdir [outputDir] [sourcePath]
            $process = new Process([
                'soffice',
                '--headless',
                '--convert-to',
                'pdf',
                '--outdir',
                $outputDir,
                $sourcePath
            ]);

            $process->mustRun();
            
            $filename = pathinfo($sourcePath, PATHINFO_FILENAME);
            $pdfPath = $outputDir . '/' . $filename . '.pdf';

            return file_exists($pdfPath) ? $pdfPath : null;
        } catch (\Throwable $exception) {
            // Catch error silently to allow fallback logic in controllers
            Log::error('PDF Conversion failed/not supported: ' . $exception->getMessage());
            return null;
        }
    }
}
