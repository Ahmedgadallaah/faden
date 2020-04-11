<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Title extends Model implements TranslatableContract
{
    use Translatable; // 2. To add translation methods
    
    protected $fillable=['image','online'];

    public $translatedAttributes = ['title'];

    public function job(){
        return $this->hasMany('App\Job');
    }
}
