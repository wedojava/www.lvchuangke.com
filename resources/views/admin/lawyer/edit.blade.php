@extends('admin.layout')

@section('styles')
<link rel="stylesheet" type="text/css" href="/assets/css/dropzone.min.css">
@endsection

@section('content')
  <div class="container">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>律师 <small>» 编辑</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">编辑律师信息</h3>
          </div>
          <div class="panel-body">

            @include('admin.partials.errors')
            @include('admin.partials.success')
            <div class="row">
              <div class="col-md-4">
                <form id="addAvatarForm"
                  action="/4/avatar"
                  method="POST"
                  class="dropzone">
                  {{ csrf_field() }}
                </form>
              </div>
              <div class="col-md-8">
                <form class="form-horizontal" role="form" method="POST"
                      action="{{ route('admin.lawyer.update', $id) }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="_method" value="PUT">

                  @include('admin.lawyer._form')

                </form>
              </div>

              
            </div>
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
            <form method="POST" action="{{ route('admin.lawyer.destroy', $id) }}">
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

@section('scripts')
<script type="text/javascript" src="/assets/js/dropzone.min.js"></script>
<script>
  Dropzone.options.addAvatarForm = {
    paramName: 'avatar',
    maxFilesize: 3,
    acceptedFiles: '.jpg, .jpeg, .png, .gif, .bmp'
  }
</script>
@endsection