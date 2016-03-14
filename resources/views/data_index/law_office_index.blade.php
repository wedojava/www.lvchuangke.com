@extends('layouts.app')
@section('navbar')
  @include('layouts.nav_index')
@stop
@section('content')
<div class="lawoffices lck-min-height" id="lawoffices">
	<div class="container">
		<h1 class="Heading--Fancy">
	        <span>加盟律所</span>
	    </h1>
		<div class="row">
			<ul class="lck-list">
				@foreach($law_offices->all() as $law_office)
				<li class="lck-list__element"><a href="">{{$law_office->officeName}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop