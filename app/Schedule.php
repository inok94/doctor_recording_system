<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Schedule
 * @package App
 */
class Schedule extends Model
{
    protected $table = 'Schedules';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }
}
