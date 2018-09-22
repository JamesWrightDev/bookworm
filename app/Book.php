<?php

namespace App;


class Book extends Model
{

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
	protected $fillable = ['title','author','description','body','bookcover'];

}
