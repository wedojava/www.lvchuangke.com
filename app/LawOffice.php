<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class LawOffice extends Model
{
	protected $fillable = [
	    'officeName',
	    'telephone',
	    'description_raw',
        'reverse_directions' => 0,
	];

	/**
	 * Alias for description_raw
	 * when you use $lawyer->description it’ll execute this function.
	 */
	public function getDescriptionAttribute($value)
	{
		return $this->description_raw;
	}

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
