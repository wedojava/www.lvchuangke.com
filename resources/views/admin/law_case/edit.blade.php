@extends('admin.layout')

@section('content')
  <div class="container">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>案情 <small>» 编辑</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">编辑案情</h3>
          </div>
          <div class="panel-body">

            @include('admin.partials.errors')
            @include('admin.partials.success')

            <form class="form-horizontal" role="form" method="POST"
                  action="{{ route('admin.law_case.update', $id) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">

              @include('admin.law_case._form')

              <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                            name="action" value="continue">
                      <i class="fa fa-floppy-o"></i>
                      保存 - 并继续编辑
                    </button>
                    <button type="submit" class="btn btn-success btn-lg"
                            name="action" value="finished">
                      <i class="fa fa-floppy-o"></i>
                      保存 - 并返回列表
                    </button>
                    <button type="button" class="btn btn-danger btn-lg"
                            data-toggle="modal" data-target="#modal-delete">
                      <i class="fa fa-times-circle"></i>
                      删除
                    </button>
                  </div>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>

    {{-- Confirm Delete --}}
    <div class="modal fade" id="modal-delete" tabIndex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              ×
            </button>
            <h4 class="modal-title">请确认！</h4>
          </div>
          <div class="modal-body">
            <p class="lead">
              <i class="fa fa-question-circle fa-lg"></i>  
              你确定要删除这条信息么?
            </p>
          </div>
          <div class="modal-footer">
            <form method="POST" action="{{ route('admin.law_case.destroy', $id) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="DELETE">
              <button type="button" class="btn btn-default"
                      data-dismiss="modal">关闭</button>
              <button type="submit" class="btn btn-danger">
                <i class="fa fa-times-circle"></i> 是的
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
