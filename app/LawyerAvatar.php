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
}
