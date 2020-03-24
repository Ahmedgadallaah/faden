<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends Model
{
    protected $fillable = ['name','description'];
    public $timestamps = false;
}
