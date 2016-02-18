<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessfulCase extends Model
{
    /**
	 * Set the HTML content automatically when the raw content is set
	 *
	 * @param string $value
	 */
	public function setCaseDetailRawAttribute($value)
	{
		$markdown = new Markdowner();
		$this->attributes['caseDetail_raw'] = $value;
		$this->attributes['caseDetail_html'] = $markdown->toHTML($value);
	}
}
