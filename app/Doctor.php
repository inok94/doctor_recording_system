<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * @package App
 */
class Doctor extends Model
{
    protected $table = 'doctors';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
