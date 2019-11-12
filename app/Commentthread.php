<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentthread extends Model
{
    
    protected $fillable = [ 
        
    ];

    public function threadstarter()
    {
        return $this->belongsTo('\App\Threadstarter');
    }
    public function replies()
    {
        return $this->hasMany('\App\Comment');
    }
}

