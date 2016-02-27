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
                  <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                      <form class="form-horizontal" role="form" method="POST"
                            action="{{ route('admin.lawyer.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('admin.lawyer._form')
                      </form>
                    </div>
                  </div>
                </div>
             </div>
        </div>
    </div>
</div>
@stop