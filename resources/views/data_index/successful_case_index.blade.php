@extends('layouts.app')
@section('navbar')
  @include('layouts.nav_index')
@stop
@section('content')
<div class="successfulcases lck-min-height" id="successfulcases">
	<div class="container">
		<h1 class="h1-shadow">
	        成功案例
	    </h1>
		<div class="row">
			<ul class="lck-list">
				@foreach($successful_cases->all() as $successful_case)
					<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">{{$successful_case->caseTitle}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop