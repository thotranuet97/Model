<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articlea extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
