<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class SuccessfulCase extends Model
{
	protected $fillable = [
	    'caseTitle',
	    'caseDetail_raw',
	    'lawyer',
	    'lawOffice',
        'reverse_directions' => 0,
	];

	/**
	 * Alias for description_raw
	 * when you use $lawyer->description it’ll execute this function.
	 */
	public function getCaseDetailAttribute($value)
	{
		return $this->caseDetail_raw;
	}

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
