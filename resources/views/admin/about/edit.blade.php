@extends('admin.layout')

@section('content')
  <div class="container">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>关于 <small>» 编辑</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">编辑关于</h3>
          </div>
          <div class="panel-body">

            @include('admin.partials.errors')
            @include('admin.partials.success')

            <form class="form-horizontal" role="form" method="POST"
                  action="{{ route('admin.about.update', $id) }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PUT">

              @include('admin.about._form')

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
                      保存 - 并返回
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