@extends('front.layout.layout')
@section('body')
@include('front.header.header')
<marquee behavior="" direction="" style="background: #27477d; color: white; margin-bottom: -8px; height: 33px;
font-size: 19px;">{{$general->marquee_text}}</marquee>
<div class="breadcumb-wrapper">
    <div class="parallax" data-parallax-image="assets/img/breadcurmb/breadcurmb-1-1.jpg"></div>
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Career</h1>
            <div class="breadcumb-menu-wrap">
                <i class="far fa-home-lg"></i>
                <ul class="breadcumb-menu">
                    <li>
                        <a href="{{route('index')}}">Home</a>
                    </li>
                    <li class="active">Career</li>
                </ul>
            </div>
        </div>
    </div>
    
</div>
<section class="vs-team-wrapper space">
		<div class="container">
			<div class="row">
			    <h1>Job Openings</h4>
			    <p>We are seeking to hire the highest caliber and the best qualified individuals. Interested candidates can review each vacancy announcement to ensure that their qualifications meet all the requirements for the position. </p><br><br>
			    	<div class="col-xl-12">
						<div class="vs-accordion accordion accordion-style2" id="vsaccordion">
					@forelse ($job as $k=>$v)
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse_{{$k}}" aria-expanded="false"
								aria-controls="collapse2">{{$v->title}}</button>
						</h2>
						<div id="collapse_{{$k}}" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
							<div class="accordion-body">
								<p><?php echo $v->details ?></p>
							</div>
						</div>
					</div>
					@empty
						<p>No job for now</p>
					@endforelse
							
							
					</div>
		    </div>
	
		</div>
	</section>



@include('front.footer.footer')
@endsection