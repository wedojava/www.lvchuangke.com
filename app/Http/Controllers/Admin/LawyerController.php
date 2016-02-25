<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LawyerCreateRequest;
use App\Http\Requests\LawyerUpdateRequest;
use App\Jobs\LawyerFormFields;
use App\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lawyer.index')
            ->withLawyers(Lawyer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->dispatch(new LawyerFormFields());
        return view('admin.lawyer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawyerCreateRequest $request)
    {
        $lawyer = Lawyer::create($request->postFillData());

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('添加律师成功！');
        }

        return redirect()
            ->route('admin.lawyer.index')
            ->withSuccess('添加律师成功！');
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
        $data = $this->dispatch(new LawyerFormFields($id));

        return view('admin.lawyer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LawyerUpdateRequest $request, $id)
    {
        $lawyer = Lawyer::findOrFail($id);
        $lawyer->fill($request->postFillData());
        $lawyer->save();

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('律师信息修改成功！');
        }

        return redirect()
            ->route('admin.law_case.index')
            ->withSuccess('律师信息修改成功！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lawyer = Lawyer::findOrFail($id);
        $lawyer->delete();

        return redirect()
            ->route('admin.lawyer.index')
            ->withSuccess('一条律师信息已删除！');
    }
}
