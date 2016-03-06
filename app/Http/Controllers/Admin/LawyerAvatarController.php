<?php

namespace App\Http\Controllers\Admin;

use App\AddAvatarToLawyer;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AddLawyerAvatarRequest;
use App\Lawyer;
use Illuminate\Http\Request;

class LawyerAvatarController extends Controller
{
	/**
     * Apply a avatar to the referenced lawyer
     * @param string             $id     
     * @param AddPhotoRequest    $request 
     */
	public function store($id, AddLawyerAvatarRequest $reqeust)
	{
		$lawyer = Lawyer::findOrFail($id);
		$lawyer_avatar = $reqeust->file('avatar_file');

		(new AddAvatarToLawyer($lawyer, $lawyer_avatar))->saveByID($id);
	}	
}
