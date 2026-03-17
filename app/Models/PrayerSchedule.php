<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerSchedule extends Model
{
    protected $fillable = [
        'type',
        'date',
        'bilal',
        'khotib',
        'imam',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
