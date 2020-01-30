<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchedulesDoctors extends Model
{
    protected $table = 'schedules_doctors';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
