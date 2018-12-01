<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Com extends Model
{
    public function article(){
        return $this->belongsTo('App\Article');
    }
    public function Etat(){
        return $this->belongsTo('App\Etat');
    }
}
