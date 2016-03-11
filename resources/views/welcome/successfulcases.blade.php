<div class="successfulcases" id="successfulcases">
	<div class="container">
		<h2 class="Heading--Fancy">
	        <span>成功案例</span>
	    </h2>
		<div class="row">
			<ul class="lck-list">
				@foreach($successful_cases->all() as $successful_case)
					<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">{{$successful_case->caseTitle}}</a></li>
				@endforeach
				{{-- <li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Automotive & Vehicle</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Enviromental & Green</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Real Estate & Mortgage</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Staff Favourites</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Home Furnishings</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Community & Non-Profit</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Entertainment & The Arts</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Wedding Services</a></li>
				<li class="lck-list__element"><i class="fa fa-check"></i> <a href="">Medical & Pharmaceutical</a></li> --}}
			</ul>
			<div class="front-section__signup awesome__button">
	            <a href="/successfulcases" class="btn--monster">更多案例</a>
	        </div>
		</div>
	</div>
</div>