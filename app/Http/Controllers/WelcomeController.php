<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\LawOffice;
use App\Lawyer;
use App\SuccessfulCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
    	// flash()->overlay('Success!', '你的情况已经提交成功，我们稍后会和您取得联系，请您保持电话通畅！');
    	return view('welcome')
    		->withAbout(About::first())
    		// ->withLawyers(DB::table('lawyers')->leftjoin('lawyer_avatars', 'lawyers.id', '=', 'lawyer_avatars.lawyer_id')->get())
    		->withLawyers(Lawyer::take(8)->with('lawyer_avatars')->get())
    		// ->withLawyers(Lawyer::take(8)->get())
    		->withLawOffices(LawOffice::take(9)->get())
    		->withSuccessfulCases(SuccessfulCase::take(9)->get());
    }
}
