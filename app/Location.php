<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Location extends Model implements TranslatableContract
{
    use Translatable; 
    protected $fillable=['online'];
    public $translatedAttributes = ['location'];

    public function job_location(){
        return $this->hasMany('App\Job');
    }
}
