<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Slider Jquery</title>
	<link rel="stylesheet" href="{{ url('assets/css/estilos.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/font-awesome.css')}}">
    
	
</head>



    <div class="container">
<body onclick="PlayAudio()">
	<div class="slideshow">
		<ul class="slider">
			<li>
				<img src="{{ url('assets/img/1.jpg')}}"  alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/2.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/3.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/4.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/5.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
			<li>
				<img src="{{ url('assets/img/6.jpg')}}" alt="">
				<section class="caption">
					<a href="{{ url('home')}}"><img class="logo" src="{{ url('assets/img/imagen 1.png')}}" alt=""></a>
				</section>
			</li>
		</ul>

		<ol class="pagination">
			
		</ol>
	
		
	<audio id="sliderAudio"  loop>
		<source src="{{ url('assets/audio/cancion.mp3')}}" type="audio/mpeg">  
		Este navegador no acepta formatos de audio
		</audio>
	</div>
	
	<script src="{{ url('assets/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{ url('assets/js/main.js')}}"></script>
</div>
</body>
</html>
