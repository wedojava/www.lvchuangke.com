<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class LawCase extends Model
{
	protected $fillable = [
	    'nickname',
	    'telephone',
	    'email',
	    'QQ',
	    'detail_raw',
        'reverse_directions' => 0,
	];

	/**
	 * Alias for detail_raw
	 */
	public function getDetailAttribute($value)
	{
		return $this->detail_raw;
	}

    /**
	 * Set the HTML detail automatically when the raw detail is set
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
