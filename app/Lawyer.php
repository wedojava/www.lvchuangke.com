<?php

namespace App;

use App\Services\Markdowner;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{

	protected $fillable = [
	    'username',
	    'professional_field',
	    'occupation_no',
	    'telephone',
	    'email',
	    'QQ',
	    'description_raw',
        'reverse_directions' => 0,
	];

	public function lawyer_avatar()
	{
		return $this->hasOne('App\LawyerAvatar');
	}

	/**
	 * Alias for description_raw
	 * when you use $lawyer->description it’ll execute this function.
	 */
	public function getDescriptionAttribute($value)
	{
		return $this->description_raw;
	}

    /**
	 * Set the HTML description automatically when the raw description is set
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
