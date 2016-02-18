<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    /**
	 * Set the HTML content automatically when the raw content is set
	 *
	 * @param string $value
	 */
	public function setDescriptionRawAttribute($value)
	{
		$markdown = new Markdowner();
		$this->attributes['description_raw'] = $value;
		$this->attributes['description_html'] = $markdown->toHTML($value);
	}
}
