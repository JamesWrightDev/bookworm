<?php

namespace App;


class Book extends Model
{

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
	protected $fillable = ['title','author','description','body','bookcover','book_id'];

	 
	public function users(){
	return $this->belongsToMany('App\Book', 'book_user')->withPivot('is_completed');
}

}
