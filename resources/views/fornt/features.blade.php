

@extends('fornt.layouts.app')

@section('content')


<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Features</li>
        </ul>
    </div>
</section>
<!-- /bottom-grids-->
	<section class="w3l-bottom-grids-6 py-5 text-center">
		<div class="container py-lg-5 py-md-4">
            <h3 class="title-big text-center mb-2">Awesome App features</h3>
            <p class="text-head mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus reprehenderit expedita
                quos sunt neque! Ullam, ut? Quam nulla esse atque?</p>
			<div class="grids-area-hny main-cont-wthree-fea row">
				<div class="col-lg-4 col-md-6 grids-feature">
					<div class="area-box">
						<span class="fa fa-cubes"></span>
						<h4><a href="#feature" class="title-head">Fully secured</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
					<div class="area-box">
						<span class="fa fa-laptop"></span>
						<h4><a href="#feature" class="title-head">Easy to edit</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
					<div class="area-box">
						<span class="fa fa-balance-scale"></span>
						<h4><a href="#feature" class="title-head">Branding & Branding</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mt-4 pt-lg-2">
					<div class="area-box">
						<span class="fa fa-pencil-square-o"></span>
						<h4><a href="#feature" class="title-head">Customizable</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mt-4 pt-lg-2">
					<div class="area-box">
						<span class="fa fa-laptop"></span>
						<h4><a href="#feature" class="title-head">Easy to edit</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grids-feature mt-4 pt-lg-2">
					<div class="area-box">
						<span class="fa fa-balance-scale"></span>
						<h4><a href="#feature" class="title-head">Branding & Branding</a></h4>
						<p>Vivamus a ligula quam. Ut blandit eu leo non sed dolor elit sed amet init consec blandit init dolor..</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //bottom-grids-->
<section class="w3l-about4 py-5">
    <div class="container px-0 py-lg-5 py-md-4">
        <div class="history-info position-relative py-lg-4">
            <div class="heading mx-auto text-center">
                <h3 class="title-big">Watch a Quick Tutorial</h3>
                <!-- <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa qui officia
                    sed deserunt mollit anim id est laborum mollit anim id est nulla.</p> -->
                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center mt-4">
                    <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                    </span>
                </a>
            </div>
            <div class="position-relative">
                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/4m7msadL5iA" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- app screenshots -->
<section class="w3l-screenshots" id="screenshots">
	<!-- /grids -->
	<div class="cusrtomer-layout py-5">
		<div class="container py-lg-5 py-md-4">
			<!-- /grids -->
			<div class="testimonial-row">
			  <div class="heading text-center">
                  <h3 class="title-big mb-2">App Screenshots</h3>
                  <p class="text-head mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus reprehenderit expedita
                    quos sunt neque! Ullam, ut? Quam nulla esse atque?</p>
			  </div>
  
				<div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
					<div class="item">
                        <img src="assets/images/features.png" class="img-fluid" alt="client-img">
					</div>
					<div class="item">
                        <img src="assets/images/features1.png" class="img-fluid" alt="client-img">
					</div>
					<div class="item">
                        <img src="assets/images/features2.png" class="img-fluid" alt="client-img">
					</div>
					<div class="item">
                        <img src="assets/images/features3.png" class="img-fluid" alt="client-img">
					</div>
					<div class="item">
                        <img src="assets/images/features.png" class="img-fluid" alt="client-img">
					</div>
					<div class="item">
                        <img src="assets/images/features1.png" class="img-fluid" alt="client-img">
					</div>
				</div>
			</div>
		</div>
		<!-- /grids -->
	</div>
	<!-- //grids -->
  </section>
  <!-- // appscreenshots -->
<!-- middle -->
	<div class="middle py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="welcome-left text-center py-md-3 mb-md-5">
                <h3 class="mb-3"><span class="fa fa-headphones"></span> We're Here to Help You</h3>
                <p class="text-italic">Have some questions? <a href="#url">Chat with us now</a>, or <a href="mailto:example@mail.com">send us an email</a> to
					get in touch.</p>
				<a href="#download" class="btn btn-primary btn-style mt-md-5 mt-4 mr-2">Download</a>
				<a href="#download" class="btn btn-white btn-style mt-md-5 mt-4">Contact us</a>
			</div>
		</div>
	</div>
	<!-- //middle -->
  <!-- forms -->
  <section class="container">
    <div class="w3l-forms-9 px-4" id="newsletter">
      <div class="main-w3 py-4">
        <div class="container-fluid py-lg-3 py-2">
          <div class="row align-items-center">
            <div class="main-midd col-lg-6">
              <h4 class="title-head">Subscribe our newsletter</h4>
              <p>We’re a team of non-cynics who truly care for our work.</p>
            </div>
            <div class="main-midd-2 col-lg-6 mt-lg-0 mt-4">
              <form action="#url" method="GET" class="rightside-form">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                <button class="btn" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //forms -->
  @endsection