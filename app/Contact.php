<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [

		'fax','mobile','email','map_KSA','map_EG','online'
	];
}
