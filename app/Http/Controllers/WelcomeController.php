<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\LawOffice;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	// flash()->overlay('Success!', '你的情况已经提交成功，我们稍后会和您取得联系，请您保持电话通畅！');
    	return view('welcome')
    		->withAbout(About::first())
    		->withLawOffices(LawOffice::take(9)->get());
    }
}
