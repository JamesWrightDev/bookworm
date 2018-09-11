<?php

namespace App;


class Book extends Model
{

	public function reviews()
	{
		return $this->hasMany('App\Review');
	}
	protected $fillable = ['title','author','description','body'];

}
