<?php

namespace App\Http\Controllers\DataIndex;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\LawOffice;
use Illuminate\Http\Request;

class LawOfficeIndexController extends Controller
{
	public function index()
    {
    	return view('data_index.law_office_index')
    			->withLawOffices(LawOffice::all());
    }
}
