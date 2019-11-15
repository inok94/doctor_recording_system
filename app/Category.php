<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    protected $table = 'categories';

    public function service()
    {
        return $this->hasMany('App\Service');
    }
}
