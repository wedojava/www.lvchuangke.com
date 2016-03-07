<?php

namespace App\Http\Controllers\Admin;

use App\Http\AvatarCrop;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LawyerCreateRequest;
use App\Http\Requests\LawyerUpdateRequest;
use App\Jobs\LawyerFormFields;
use App\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\getClientOriginalExtension;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

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
        $lawyer = Lawyer::findOrFail($id);
        $lawyer_avatar = $lawyer->lawyer_avatar()
                    ->where('lawyer_id', $id)->first();

        return view('admin.lawyer.edit', $data)
                ->withAvatar(($lawyer_avatar != null) ? $lawyer_avatar->thumbnail_path : 'assets/image/avatar.svg');
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
            ->route('admin.lawyer.index')
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
        // $lawyer = Lawyer::findOrFail($id);        
        // $lawyer->delete();
        
        $this->destroyLawyerAfterAvatar($id);

        return redirect()
            ->route('admin.lawyer.index')
            ->withSuccess('一条律师信息已删除！');
    }

    public function destroyLawyerAfterAvatar($id)
    {
        $lawyer = Lawyer::findOrFail($id);
        $lawyer_avatar = $lawyer->lawyer_avatar;

        if (File::exists($lawyer_avatar->path)) {
            try{
                File::delete($lawyer_avatar->path);
                File::delete($lawyer_avatar->thumbnail_path);
            }catch(Exception $e){
                throw new Exception("头像文件删除失败！", $e->getMessage(), "\n");
            }finally{
                $lawyer->lawyer_avatar->delete();
                $lawyer->delete();
            }
        }

        return true;

    }

    // public function avatar($id)
    // {
    //     return view('admin.lawyer.avatar');
    // }

    // public function avatarUpload(Request $request)
    // {
        // $this->wrongTokenAjax($request);
        // $file = $request->file('image');
        // $input = array('image' => $file);
        // $rules = array('image' => 'image');
        // $validator = Validator::make($input, $rules);
        // if ($validator->fails()) {
        //     return Response::json([
        //         'success' => false,
        //         'error' => $validator->getMessageBag()->toArray()
        //     ]);
        // }

        // $destinationPath = 'uploads/avatars';
        // $filename = 'lawyer_id.' . $request->id . '.avatar.' . $file->getClientOriginalExtension();
        // // $filename = $file->getClientOriginalName();
        // $file->move($destinationPath, $filename);

        // return Response::json([
        //     'success' => true,
        //     'aratar' => asset($destinationPath . $filename),
        // ]);

        // 
        // $file = $request->file('image');
        // $name = 'lawyer_' . $request->id . '_avatar. ' . $file->getClientOriginalExtension();
        // $file->move('uploads/avatars', $name);
        // return 'Done';
    // }

    // public function wrongTokenAjax(Request $request)
    // {
    //     if (Session::token() !== $request->get('_token')) {
    //         $response = [
    //             'status' => false,
    //             'error' => 'Wrong Token!',
    //         ];
    //         return Response::json($request);
    //     }
    // }
}
