@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>新闻 <small>» 列表</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/post/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加新闻
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="lawcases-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="hidden-sm">标题</th>
                            <th class="hidden-sm">内容（Raw）</th>
                            <th class="hidden-sm">内容（Html）</th>
                            <th data-sortable="false">管理</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="hidden-sm">{{ $post->title }}</td>
                                <td class="hidden-md">{{ $post->content_raw }}</td>
                                <td class="hidden-md">{{ $post->content_html }}</td>
                                <td>
                                    <a href="/admin/post/{{ $post->id }}/edit"
                                     class="btn btn-xs btn-primary">
                                        <i class="fa fa-edit"></i>编辑
                                    </a>
                                    {{-- <a href="/post/{{ $post->id }}"
                                     class="btn btn-xs btn-success">
                                        <i class="fa fa-eye"></i>查看
                                    </a> --}}
                                    <a href="/admin/post/{{ $post->id }}" class="btn btn-xs btn-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="确定要删除么?">
                                        <i class="fa fa-times-circle"></i> 删除
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/assets/js/laravelDeleteHandler.js"></script>
    <script>
        $(function() {
            $("#lawcases-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>
@stop
