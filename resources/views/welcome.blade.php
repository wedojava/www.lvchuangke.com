@extends('layouts.app')

@section('content')
<div class="lck-jumbotron">
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-8">
            {!! $about->detail_html !!}
        </div>
        <div class="col-md-4">
          <form class="form-horizontal" method="POST" action="/guestcase" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <input type="nickname" class="form-control" name="nickname" id="nickname" placeholder=" 输入您的姓名！" autofocus required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <input type="telephone" class="form-control" name="telephone" id="telephone" placeholder="输入您的联系电话！" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <textarea type="text" name="detail" id="detail" class="form-control" rows="5" placeholder="请在200字以内，简述您的案情！" required>{{-- old('detail') --}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <button type="submit" class="btn btn--bright btn--3d"><i class="fa fa-btn fa-send"></i>提交</button>
              </div>
            </div>

            {{--@if(count($errors) > 0)
              @foreach($errors->all() as $error)
                {{flash()->error('输入错误!', $error)}}
              @endforeach
            @endif--}}

            @if(count($errors) > 0)
              <div class="alert alert-danger col-sm-11 col-md-offset-1">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
</div> {{-- end of lck-jumbotron --}}

<div class="container">
  @include('welcome.flowchart')
</div>
@include('welcome.lawyers')
@include('welcome.lawoffices')
@include('welcome.successfulcases')
@endsection
