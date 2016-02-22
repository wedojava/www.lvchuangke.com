<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\GuestCaseRequest;
use App\LawCase;
use Illuminate\Http\Request;

class GuestCaseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestCaseRequest $request)
    {
        App\LawCase::create($request->postFillData());
        return redirect()
            ->route('/')
            ->withSuccess('新案情添加成功！');
    }
}
