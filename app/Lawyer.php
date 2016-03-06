<?php

namespace App;

use App\LawyerAvatar;
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

	public function addLawyerAvatar(LawyerAvatar $lawyer_avatar)
    {
        return $this->lawyer_avatar()->save($lawyer_avatar);
    }
	public function updateLawyerAvatar(LawyerAvatar $lawyer_avatar, $id, $lawyer_id)
    {
        return $this->lawyer_avatar()
        	->where('lawyer_id', $lawyer_id)
        	->update([
        		'name' => $lawyer_avatar->name,
        		'path' => $lawyer_avatar->path,
        		'thumbnail_path' => $lawyer_avatar->thumbnail_path
    		]);
		// return [
  //       		'name' => $lawyer_avatar->name,
  //       		'path' => $lawyer_avatar->path,
  //       		'thumbnail_path' => $lawyer_avatar->thumbnail_path
  //   		];
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
