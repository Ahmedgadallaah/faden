<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Officer;
class OfficerExperience extends Model
{
   
    protected $fillable=['job_title','position','company_name'];

    public function officers()
    {
        return $this->belongsToMany(Officer::class)->withTimestamps();;
    }
}
