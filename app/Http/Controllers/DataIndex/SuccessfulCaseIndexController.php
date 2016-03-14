<?php

namespace App\Http\Controllers\DataIndex;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SuccessfulCase;
use Illuminate\Http\Request;

class SuccessfulCaseIndexController extends Controller
{
    public function index()
    {
    	return view('data_index.successful_case_index')
    			->withSuccessfulCases(SuccessfulCase::all());
    }
}
