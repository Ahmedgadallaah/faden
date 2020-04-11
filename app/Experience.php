<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    protected $fillable=['experience','online'];
        //
        public function job_experience(){
            return $this->hasMany('App\Job');
        }
}
