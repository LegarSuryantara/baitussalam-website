<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityReport extends Model
{
    protected $fillable = [
        'title',
        'periode_bulan',
        'periode_tahun',
        'description',
        'file',
        'uploaded_by'
    ];
}
