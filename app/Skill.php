<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Officer;
class Skill extends Model
{
    


    protected $fillable=['skill','online'];
    public function officers()
    {
        return $this->belongsToMany(Officer::class)->withTimestamps();;
    }
}
