<div class="lawyers">
	<div class="container">
		<h1>我们的团队</h1>
		<div class="row">
			<div class="col-md-7 col-md-offset-5">
				<div class="lawyer__header">
	                <div class="lawyer__header__avatar" style="background-image: url('assets/image/avatar.svg');">
	                </div>
	                <h3 class="lawyer__header__name">
	                    桑云
	                </h3>
	                <p class="lawyer__header__role">
	                    <i class="fa fa-graduation-cap"></i>新疆律师协会会长
	                </p>
	                <p class="lawyer__header__role">
	                    <i class="fa fa-legal"></i>职业证号：1234567789
	                </p>
	            </div>
            </div>
            @foreach ($lawyers->all() as $lawyer)
				<div class="lawyer__info">
					<div class="lawyer__header">
		                <div class="lawyer__header__avatar" style="background-image: url('assets/image/avatar.svg');">
		                </div>
		                <h3 class="lawyer__header__name">
		                    {{ $lawyer->username }}
		                </h3>
		                <p class="lawyer__header__role">
		                    <i class="fa fa-graduation-cap"></i>专业领域：{{ $lawyer->professional_field }}
		                </p>
		                <p class="lawyer__header__role">
		                    <i class="fa fa-legal"></i>职业证号：{{ $lawyer->occupation_no }}
		                </p>
		            </div>
	            </div>
            @endforeach
            

            <div class="front-section__signup awesome__button">
	            <a href="/lawyers" class="btn--monster">更多律师</a>
	        </div>
		</div>
	</div>
</div>