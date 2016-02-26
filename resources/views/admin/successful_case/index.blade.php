@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>案例 <small>» 列表</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/successful_case/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 添加案例
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
                            <th class="hidden-sm">案例名称</th>
                            <th class="hidden-md">案例简介</th>
                            <th class="hidden-sm">辩护律师</th>
                            <th class="hidden-sm">承办律所</th>
                            <th data-sortable="false">管理</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($successful_cases as $successful_case)
                            <tr>
                                <td class="hidden-sm">{{ $successful_case->caseTitle }}</td>
                                <td class="hidden-md">{{ $successful_case->caseDetail_raw }}</td>
                                <td class="hidden-md">{{ $successful_case->lawyer }}</td>
                                <td class="hidden-md">{{ $successful_case->lawOffice }}</td>
                                <td>
                                    <a href="/admin/successful_case/{{ $successful_case->id }}/edit"
                                     class="btn btn-xs btn-primary">
                                        <i class="fa fa-edit"></i>编辑
                                    </a>
                                    {{-- <a href="/successful_case/{{ $successful_case->id }}"
                                     class="btn btn-xs btn-success">
                                        <i class="fa fa-eye"></i>查看
                                    </a> --}}
                                    <a href="/admin/successful_case/{{ $successful_case->id }}" class="btn btn-xs btn-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="确定要删除么?">
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