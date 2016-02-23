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
     * @param  App\Http\Requests\GuestCaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestCaseRequest $request)
    {
        LawCase::create($request->postFillData());
        return redirect()
            ->back()
            ->withSuccess('新案情添加成功！');
    }
}
