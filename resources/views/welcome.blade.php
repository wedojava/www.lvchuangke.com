@extends('layouts.app')

@section('content')
<div class="lck-jumbotron">
    <div class="container">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-8">
              <h1>我们承诺</h1>
              <p>你还在东奔西跑，自己找律师吗？而且，你找的只是<b>一个</b>律师？太 Out 了！</p>
              <p>我们为一个案件推荐该领域内最权威的<b>多名</b>律师，由众多律师分别给出答辩意见书，再有我们专业团队进行筛查，进入案件预审程序，最终则最优律师留下。</p>
              <p>我们为您保驾护航！我们承诺，最终，你只需要话费请一名律师的钱！</p>
              <p>
                <a class="btn btn-lg btn-lck-blue" href="javascript:;" role="button">联系我们 <i class="fa fa-btn fa-arrow-circle-right"></i>15899138838 <i class="fa fa-btn fa-mobile"></i></a>
              </p>
            </div>
            <div class="col-md-4">
              <form class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="nickname" class="form-control" id="nickname" placeholder=" 输入您的姓名！">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="telephone" class="form-control" id="telephone" placeholder="输入您的联系电话！">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <textarea type="text" name="detail" id="detail" class="form-control" rows="5" placeholder="请在150字以内，简述您的案情！">{{ old('detail') }}</textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-lg btn-lck-green"><i class="fa fa-btn fa-send"></i>提交</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  {{-- <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
    <p>To see the difference between static and fixed top navbars, just scroll.</p>
    <p>
      <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a>
    </p>
  </div>
 --}}
</div>
@endsection
