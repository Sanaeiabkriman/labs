<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function Icone(){
        return $this->belongsTo('App\Icone');
    }
}
