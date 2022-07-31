<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toppost extends Model
{
        public function user(){

    	return $this->belongsTo('App\User');
    }



      public function category(){

    	return $this->belongsTo('App\Category');
    }

     public function tag(){

    	return $this->belongsTo('App\Tag');
    }


}
