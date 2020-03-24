<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Hierarchy extends Model implements TranslatableContract
{
    use Translatable; // 2. To add translation methods
    protected $fillable=['image','online'];
     // 3. To define which attributes needs to be translated
     public $translatedAttributes = ['name'];
}
