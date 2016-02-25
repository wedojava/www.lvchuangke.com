<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LawOfficeCreateRequest;
use App\Http\Requests\LawOfficeUpdateRequest;
use App\Jobs\LawOfficeFormFields;
use App\LawOffice;
use Illuminate\Http\Request;

class LawOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.law_office.index')
            ->withLawOffices(LawOffice::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->dispatch(new LawOfficeFormFields());

        return view('admin.law_office.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawOfficeCreateRequest $request)
    {
        $law_office = LawOffice::create($request->postFillData());

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('律所添加成功！');
        }

        return redirect()
            ->route('admin.law_office.index')
            ->withSuccess('律所添加成功！');
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
        $data = $this->dispatch(new LawOfficeFormFields($id));

        return view('admin.law_office.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LawOfficeUpdateRequest $request, $id)
    {
        $law_office = LawOffice::findOrFail($id);
        $law_office->fill($request->postFillData());
        $law_office->save();

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('律所信息修改成功！');
        }

        return redirect()
            ->route('admin.law_office.index')
            ->withSuccess('律所信息修改成功！');
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
