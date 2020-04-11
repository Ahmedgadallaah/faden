<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Job extends Model implements TranslatableContract
{
    use Translatable; // 2. To add translation methods
    protected $fillable=['author','online','client_id','location_id','experience_id','title_id'];
     // 3. To define which attributes needs to be translated
     public $translatedAttributes = ['description','requirment'];
     

     public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function experience(){
        return $this->belongsTo(Experience::class);
    }

    public function title(){
        return $this->belongsTo(Title::class);
    }
}
