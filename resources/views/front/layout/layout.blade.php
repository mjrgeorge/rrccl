<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Rayhans Clinic</title>
	<meta name="author" content="Vecuro">
	<meta name="description" content="Medixi - Medical and Health Care HTML Template">
	<meta name="keywords" content="Medixi - Medical and Health Care HTML Template">
	<meta name="robots" content="INDEX,FOLLOW">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&amp;family=Quicksand:wght@400;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <?php 
          $imageFiles = File::files(public_path('preloader'));

       $imageUrls = [];
       foreach ($imageFiles as $file) {
        $imageUrls[] = 'preloader/' . $file->getFilename(); 
        }
     
     ?>
    <div class="preloader">
		{{-- <button class="vs-btn preloaderCls">Cancel Preloader</button> --}}
		<div class="preloader-inner">
			<svg width="88px" height="108px" viewBox="0 0 54 64">
				<defs></defs>
				<img src="{{asset('preloader/(1).png')}}" alt="" height="150px" width="50%" class="cycling-image" alt="Cycling Image">
				{{-- <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<path class="beat-loader" d="M0.5,38.5 L16,38.5 L19,25.5 L24.5,57.5 L31.5,7.5 L37.5,46.5 L43,38.5 L53.5,38.5" id="Path-2" stroke-width="2"></path> --}}
				</g>
			</svg>
		</div>
	</div> 
    @yield('body')
    
</body>

</html>
<a href="#" class="scrollToTop scroll-bottom style2">
	<i class="fas fa-arrow-alt-up"></i>
</a>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/vscustom-carousel.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script>
    const images = [
      @foreach ($imageUrls as $imageUrl)
        "{{ asset($imageUrl) }}",
      @endforeach
    ];

let currentIndex = 0;
const imageElement = document.querySelector('.cycling-image');

function cycleImages() {
  imageElement.style.transform = 'scale(0.8)';
  setTimeout(() => {
    currentIndex = (currentIndex + 1) % images.length;
    imageElement.src = images[currentIndex];
    imageElement.style.transform = 'scale(1)';
    cycleImages(); // Recursive call to change image rapidly
  }, 100); // Change image every 100 milliseconds
}

cycleImages();
  </script>