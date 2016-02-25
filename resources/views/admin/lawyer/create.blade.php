@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row page-title-row">
        <div class="col-md-12">
            <h3>律师 <small>» 添加律师</small></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">添加律师</h3>
                </div>
                <div class="panel-body">

                    @include('admin.partials.success')
                    @include('admin.partials.errors')

                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ route('admin.lawyer.store') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      @include('admin.lawyer._form')

                      <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                          <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    name="action" value="continue">
                              <i class="fa fa-floppy-o"></i>
                              保存 - 并继续添加
                            </button>
                            <button type="submit" class="btn btn-success btn-lg"
                                    name="action" value="finished">
                              <i class="fa fa-floppy-o"></i>
                              保存 - 并返回列表
                            </button>
                          </div>
                        </div>
                      </div>

                    </form>

                 </div>
             </div>
        </div>
    </div>
</div>

@stop