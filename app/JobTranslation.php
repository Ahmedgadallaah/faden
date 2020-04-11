<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTranslation extends Model
{
    protected $fillable = ['title','description','requirment'];
    public $timestamps = false;

   
}
