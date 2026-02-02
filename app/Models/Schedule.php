<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'start',
        'end',
        'date',
        'status',
        'location',
        'description',
    ];

    public function getStartTimeAttribute()
    {
        return $this->start
            ? Carbon::parse($this->start)->format('H:i')
            : null;
    }

    public function getEndTimeAttribute()
    {
        return $this->end
            ? Carbon::parse($this->end)->format('H:i')
            : null;
    }
    
}
