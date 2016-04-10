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

	/**
	 * Alias for content_raw
	 */
	public function getContentAttribute($value)
	{
		return $this->content_raw;
	}

    /**
	 * Set the HTML content automatically when the raw content is set
	 *
	 * @param string $value
	 */
	public function setContentRawAttribute($value)
	{
		$markdown = new Markdowner();
		$this->attributes['content_raw'] = $value;
		$this->attributes['content_html'] = $markdown->toHTML($value);
	}
}
