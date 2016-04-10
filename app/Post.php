<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
	    'title',
	    'content_raw',
	    'page_image',
	];

	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
}
