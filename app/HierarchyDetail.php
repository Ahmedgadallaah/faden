<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class HierarchyDetail extends Model implements TranslatableContract
{
    use Translatable; 
    protected $fillable=['online','department_id'];
    public $translatedAttributes = ['title'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
