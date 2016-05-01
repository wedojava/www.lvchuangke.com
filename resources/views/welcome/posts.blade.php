<div class="lawoffices" id="lawoffices">
	<div class="container">
		<h1 class="Heading--Fancy">
	        <span>律政新闻</span>
	    </h1>
		<div class="row">
			<ul class="lck-list">
				@foreach($posts->all() as $post)
				<li class="lck-list__element"><a href="">{{$post->title}}</a></li>
				@endforeach
			</ul>
			<div class="front-section__signup awesome__button">
	            <a href="/lawyers" class="btn--monster">更多新闻</a>
	        </div>
		</div>
	</div>
</div>