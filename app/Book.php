<?php

namespace App;


class Book extends Model
{

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
	protected $fillable = ['title','author','description','body','bookcover'];

	// protected $with = ['user']; 
// 	public function user(){
// 	return $this->belongsToMany('App\Book', 'book_user');
// }

}
