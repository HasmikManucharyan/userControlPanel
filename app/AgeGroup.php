<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model
{
    protected $fillable = ['ageGroup'];
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
