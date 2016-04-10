<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'post_photos';
	protected $fillable = ['path'];
    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
