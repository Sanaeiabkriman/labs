<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tag(){
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }
    public function com(){
        return $this->hasMany('App\Com');
    }
    public function etat(){
        return $this->belongsTo('App\Etat');
    }
    public function getComCount(){
       return $this->com()->where('etat_id',2)->count();
    }
    
}
