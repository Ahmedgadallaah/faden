<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
 use Translatable;   
    protected $fillable=['logo','logo_2030','En_flag','Ar_flag','back_img'];
     
     public $translatedAttributes = ['name','vision'];
}
