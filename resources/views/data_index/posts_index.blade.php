@extends('layouts.app')
@section('navbar')
  @include('layouts.nav_index')
@stop
@section('content')
<div class="lawoffices lck-min-height" id="lawoffices">
	<div class="container">
		<h1 class="h1-shadow">
	        律政新闻
	    </h1>
		<div class="row">
			<ul class="lck-list">
				@foreach($posts->all() as $post)
					<li class="lck-list__element"><a href="">{{$post->title}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop