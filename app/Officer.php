<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\OfficerExperience;
class Officer extends Model
{

    protected $fillable=['address','phone','email','objective','university','city','Gpa','communication','leader','cv'];
    
    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withTimestamps();;
    }
    public function OfficerExperience()
    {
        return $this->belongsToMany(OfficerExperience::class)->withTimestamps();
    }
}
