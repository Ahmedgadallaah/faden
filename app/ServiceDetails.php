<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $fillable = ['detail_Id','images'];
    public $timestamps = false;
    public function event(){
        return $this->belongsTo('App\Service');
    }
}
