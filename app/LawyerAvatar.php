<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LawyerAvatar extends Model
{
	protected $table = 'lawyer_avatars';
	protected $fillable = [
		'name',
		'path',
		'thumbnail_path',
	];

    public function lawyer()
    {
    	return $this->belongsTo('App\Lawyer');
    }

    public function baseDir()
    {
        // return 'uploads/avatars';
        return config('lvchuangke.lawyer_avatar');
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }
}
