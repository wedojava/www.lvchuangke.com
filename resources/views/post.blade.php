@extends('layouts.app')
@section('navbar')
  @include('layouts.nav_index')
@stop
@section('content')
<div class="lawoffices lck-min-height" id="lawoffices">
	<div class="container">
		<h1 class="h1-shadow">
	        {{$post->title}}
	    </h1>
		<div class="row">
		<div class="date">{{$post->created_at}}</div>
			<div class="content">
				{!!$post->content_html!!}
			</div>
		</div>
	</div>
</div>
@stop