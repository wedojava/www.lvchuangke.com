@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>案情 <small>» 列表</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/law_case/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加案情
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
                            <th class="hidden-sm">姓名</th>
                            <th class="hidden-sm">联系电话</th>
                            <th class="hidden-sm">电子邮件</th>
                            <th class="hidden-sm">QQ</th>
                            <th class="hidden-md">案情简述</th>
                            <th data-sortable="false">管理</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($law_cases as $law_case)
                            <tr>
                                <td class="hidden-sm">{{ $law_case->nickname }}</td>
                                <td class="hidden-md">{{ $law_case->telephone }}</td>
                                <td class="hidden-md">{{ $law_case->email }}</td>
                                <td class="hidden-md">{{ $law_case->QQ }}</td>
                                <td class="hidden-md">{{ $law_case->detail_raw }}</td>
                                <td>
                                    <a href="/admin/law_case/{{ $law_case->id }}/edit"
                                     class="btn btn-xs btn-info">
                                        <i class="fa fa-edit"></i>编辑
                                    </a>
                                    <a href="/law_case/{{ $law_case->id }}"
                                     class="btn btn-xs btn-warning">
                                        <i class="fa fa-eye"></i>查看
                                    </a>
                                    <a href="/admin/law_case/{{ $law_case->id }}" class="btn btn-xs btn-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="确定要删除么?">
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
