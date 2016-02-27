@extends('layouts.app')

@section('content')
<div class="lck-jumbotron">
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-8">
            {!! App\About::first()->detail_html !!}
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
                <button type="submit" class="btn btn-lg btn-lck-green"><i class="fa fa-btn fa-send"></i>提交</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> {{-- end of lck-jumbotron --}}

<div class="container">
  这里是操作流程
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
@endsection
