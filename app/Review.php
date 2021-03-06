<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title','body','book_id','user_id','rating'];
    public function book(){
    	return $this->belongsTo(Book::class);
    }

    protected $with = ['user'];   
    public function user(){
        return $this->belongsTo(User::class);
    }
}
