<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=["name","des","icon"];
    
    
    public function videos()
            
    {
        return $this->hasMany("App\Models\Video");
    }
}
