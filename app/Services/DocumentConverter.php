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

        try {
            $process->mustRun();
            
            // The output filename will be the same as source but with .pdf extension
            $filename = pathinfo($sourcePath, PATHINFO_FILENAME);
            $pdfPath = $outputDir . '/' . $filename . '.pdf';

            return file_exists($pdfPath) ? $pdfPath : null;
        } catch (\Throwable $exception) {
            Log::error('PDF Conversion failed: ' . $exception->getMessage());
            return null;
        }
    }
}
