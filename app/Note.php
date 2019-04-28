<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function note(){
        return $this->belongsTo('App\Note_type');
    }
}
