<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\User;

class Police extends Model
{
    
    protected $fillable = [
        'name','force_number','station'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
