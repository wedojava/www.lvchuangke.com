<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LawCaseCreateRequest;
use App\Http\Requests\LawCaseUpdateRequest;
use App\Jobs\LawCaseFormFields;
use App\LawCase;
use Illuminate\Http\Request;

class LawCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.law_case.index')
            ->withLawCases(LawCase::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->dispatch(new LawCaseFormFields());
        return view('admin.law_case.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawCaseCreateRequest $request)
    {
        $law_case = LawCase::create($request->postFillData());

        return redirect()
            ->route('admin.law_case.index')
            ->withSuccess('新案情添加成功！');
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
        $data = $this->dispatch(new LawCaseFormFields($id));

        return view('admin.law_case.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LawCaseUpdateRequest $request, $id)
    {
        $law_case = LawCase::findOrFail($id);
        $law_case->fill($request->postFillData());
        $law_case->save();

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('案件更改保存成功！');
        }

        return redirect()
            ->route('admin.law_case.index')
            ->withSuccess('案件更改保存成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $law_case = LawCase::findOrFail($id);
        $law_case->delete();

        return redirect()
            ->route('admin.law_case.index')
            ->withSuccess('案件已删除！');
    }
}
