<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTranslation extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
