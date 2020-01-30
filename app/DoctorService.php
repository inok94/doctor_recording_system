<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorService extends Model
{
    //protected $table = 'doctor_services';

    protected $primaryKey = 'id';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
