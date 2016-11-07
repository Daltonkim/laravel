
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Http\Requests;
use Auth;
use Image;
use App\User;

class Post extends Model
{
    //post model code
    public function user()
    {

     return $this->belongsTo('App\User');

    }
public function posts(){

      return $this->hasMany('App\Post');
}
public function likes(){
      
      return $this->hasMany('App\Like');

}

}
