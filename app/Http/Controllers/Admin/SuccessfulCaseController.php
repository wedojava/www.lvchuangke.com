<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\SuccessfulCaseCreateRequest;
use App\Http\Requests\SuccessfulCaseUpdateRequest;
use App\Jobs\SuccessfulCaseFormFields;
use App\SuccessfulCase;
use Illuminate\Http\Request;

class SuccessfulCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.successful_case.index')
            ->withSuccessfulCases(SuccessfulCase::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->dispatch(new SuccessfulCaseFormFields());
        return view('admin.successful_case.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuccessfulCaseCreateRequest $request)
    {
        $successful_case = SuccessfulCase::create($request->postFillData());

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('添加案例成功！');
        }

        return redirect()
            ->route('admin.successful_case.index')
            ->withSuccess('添加案例成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->dispatch(new SuccessfulCaseFormFields($id));
        return view('admin.successful_case.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuccessfulCaseUpdateRequest $request, $id)
    {
        $successful_case = SuccessfulCase::findOrFail($id);
        $successful_case->fill($request->postFillData());
        $successful_case->save();

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('案例修改成功！');
        }

        return redirect()
            ->route('admin.successful_case.index')
            ->withSuccess('案例修改成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
