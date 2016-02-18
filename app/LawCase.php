<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class LawCase extends Model
{
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
