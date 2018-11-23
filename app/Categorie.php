<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function Etat(){
        return $this->belongsTo('App\Etat');
    }
}
