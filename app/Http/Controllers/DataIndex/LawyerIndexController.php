<?php

namespace App\Http\Controllers\DataIndex;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Lawyer;
use Illuminate\Http\Request;

class LawyerIndexController extends Controller
{
    public function index()
    {
    	return view('data_index.lawyer_index')
    			->withLawyers(Lawyer::all());
    }
}