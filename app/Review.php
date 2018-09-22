<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['title','body','book_id'];
    public function book(){
    	return $this->belongsTo(Book::class);
    }
    
}
