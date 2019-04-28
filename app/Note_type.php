<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note_type extends Model
{
    public function note(){
        return $this->hasMany('App\Note');
    }
}
