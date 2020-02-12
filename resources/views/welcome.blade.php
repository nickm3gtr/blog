@extends('layout')

@section('content')

    <!-- Banner -->
			<section id="banner">
				<h2>Travel</h2>
				<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
			</section>

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Latest Posts</h2>
						</header>

						@foreach ($blogs as $blog)
							@if($blog->id % 2 != 0)
								<div class="row 150%">
							@endif
								<div class="6u 12u$(xsmall)">
									<div class="image fit captioned"
										onclick="window.location.href = '/blogs/{{ $blog->slug }}'"
										style="cursor: pointer;">
										<img src="images/pic02.jpg" alt="" />
										<h3><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
									</div>
								</div>
							@if($blog->id % 2 == 0 || $loop->last)
								</div>
							@endif
						@endforeach
						
						<ul class="actions">
							<li><a href="/blogs" class="button special big">View More >></a></li>
						</ul>
					</div>
				</section>

			

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Follow My Blog</h2>
							<p>Get new content delivered directly to your inbox.</p>
						</header>
						<ul class="actions">
							<li><a href="#" class="button special big">Get in touch</a></li>
						</ul>
					</div>
				</section>
    
@endsection