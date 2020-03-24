<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientTranslation extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
