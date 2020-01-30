<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * @package App
 */
class Doctor extends Model
{
    //protected $table = 'doctors';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function scheduleDoctor()
    {
        return $this->hasMany('App\SchedulesDoctors');
    }

    public function doctorService()
    {
        return $this->hasMany('App\DoctorService');
    }
}
