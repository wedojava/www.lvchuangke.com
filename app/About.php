<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $fillable = [
	    'detail_raw',
        'reverse_directions' => 0,
	];

	/**
	 * Alias for description_raw
	 * when you use $lawyer->description it’ll execute this function.
	 */
	public function getDetailAttribute($value)
	{
		return $this->detail_raw;
	}

    /**
	 * Set the HTML content automatically when the raw content is set
	 *
	 * @param string $value
	 */
	public function setDetailRawAttribute($value)
	{
		$markdown = new Markdowner();
		$this->attributes['detail_raw'] = $value;
		$this->attributes['detail_html'] = $markdown->toHTML($value);
	}
}
