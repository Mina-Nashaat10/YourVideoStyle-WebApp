<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   
    protected $fillable=["name",
       
       "des",
       "Link",
       "publish",
       "User_id",
       "Category_id",
       "image",
        "src"
        ];
    
      public function cat()
   {
       return $this->belongsTo("App\Models\Category","Category_id");
   }
    
    public function user()
    {
      return   $this->belongsTo("App\Models\User","User_id");
        
    }
    
    
    
}
