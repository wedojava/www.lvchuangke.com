@extends('admin.layout')

@section('content')
    @foreach ($abouts as $about)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            关于我们
                            <a href="/admin/about/{{ $about->id }}/edit"
                             class="btn-lck-xm btn btn-xs btn-primary">
                                <i class="fa fa-edit"></i>编辑
                            </a>
                        </h3>
                    </div>
                    <div class="panel-body">

                            {!!$about->detail_html!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop