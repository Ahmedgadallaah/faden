<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [

		'fax','mobile','email','map','online'
	];
}
