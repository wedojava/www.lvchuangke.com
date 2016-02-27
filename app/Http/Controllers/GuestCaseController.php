<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Flash;
use App\Http\Requests;
use App\Http\Requests\GuestCaseRequest;
use App\LawCase;
use Illuminate\Http\Request;

class GuestCaseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GuestCaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestCaseRequest $request)
    {
        LawCase::create($request->postFillData());
        flash()->success('提交成功!', '请勿重复提交！你的情况已经提交成功，我们稍后会和您取得联系，请您保持电话通畅！');
        return redirect()->back();
        // return redirect()->back()->withSuccess('你的情况已经提交成功，我们稍后会和您取得联系，请您保持电话通畅！');
    }
}
