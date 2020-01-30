<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id';

    public function doctor()
    {
        return $this->belongsToMany('App\Doctor');
    }
    public function doctorService()
    {
        return $this->hasMany('App\DoctorService');
    }
}
