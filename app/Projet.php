<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function Icone(){
        return $this->belongsTo('App\Icone');
    }
}
