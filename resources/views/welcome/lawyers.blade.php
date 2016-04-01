<div class="lawyers" id="lawyers">
	<div class="container">
		<h1 class="h1-shadow">我们的团队</h1>
		<div class="row">
			<div class="col-md-7 col-md-offset-5">
				<div class="lawyer__header">
	                <div class="lawyer__header__avatar" style="background-image: url('assets/image/avatar.svg');">
	                </div>
	                <h3 class="lawyer__header__name">
	                    桑云
	                </h3>
	                <p class="lawyer__header__role">
	                    <i class="fa fa-graduation-cap"></i>新疆律师协会会长：民商、刑事、非诉
	                </p>
	                <p class="lawyer__header__role">
	                    <i class="fa fa-legal"></i>执业证号：16501199110268222
	                </p>
	            </div>
            </div>
            @foreach ($lawyers->all() as $lawyer)
				<div class="lawyer__info">
					<div class="lawyer__header">
		                <div class="lawyer__header__avatar" 
		                	style="background-image: 
		                	url('{{ 
									($lawyer->lawyer_avatars['thumbnail_path'] == "") ? "assets/image/avatar.svg" : $lawyer->lawyer_avatars->thumbnail_path
		                		 }}');">
		                </div>
		                <!-- <div class="lawyer__header__avatar" style="background-image: url('assets/image/avatar.svg');">
		                </div> -->
		                <h3 class="lawyer__header__name">
		                    {{ $lawyer->username }}
		                </h3>
		                <p class="lawyer__header__role">
		                    <i class="fa fa-graduation-cap"></i>专业领域：{{ $lawyer->professional_field }}
		                </p>
		                <p class="lawyer__header__role">
		                    <i class="fa fa-legal"></i>执业证号：{{ $lawyer->certified_no }}
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