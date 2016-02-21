@extends('layouts.app')

@section('content')
<div class="lck-jumbotron">
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-8">
          <h1>我们承诺</h1>
          <p>你还在东奔西跑，自己找律师吗？而且，你找的只是<span class="lck-highlight">一个</span>律师？太 Out 了！</p>
          <p>我们为一个案件推荐该领域内最权威的<span class="lck-highlight">多名</span>律师，由众多律师分别给出答辩意见书，再有我们专业团队进行筛查，进入案件预审程序，最终则最优律师留下。</p>
          <p>我们为您保驾护航！我们承诺，最终，你只需要话费请一名律师的钱！</p>
          <p>
            <a class="btn btn-lg btn-lck-blue" href="javascript:;" role="button">联系我们 <i class="fa fa-btn fa-arrow-right"></i>15899138838</a>
          </p>
        </div>
        <div class="col-md-4">
          <form class="form-horizontal" method="POST" action="/law_case" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <input type="nickname" class="form-control" id="nickname" placeholder=" 输入您的姓名！" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <input type="telephone" class="form-control" id="telephone" placeholder="输入您的联系电话！" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-11 col-md-offset-1">
                <textarea type="text" name="detail" id="detail" class="form-control" rows="5" placeholder="请在150字以内，简述您的案情！" required>{{ old('detail') }}</textarea>
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
