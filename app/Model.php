<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
   protected $fillable = ['title','author','description','body','user_id'];
}
