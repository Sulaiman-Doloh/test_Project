@extends('layouts.app')

@section('content')

        <section class="hero">
            <div class="container">
              <div class="hero-info">
                <!-- <h3>This is hero</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque inventore, est minus odio, iure ipsam praesentium non, odit itaque tenetur nulla voluptatem! Doloremque eveniet dolorem labore numquam, esse tempore. Aperiam?</p>
                <a href="#" class="hero-btn">learn more</a> -->
              </div>
            </div>
        </section>

        <div class="w3-container">
            <h2 class="text-center">Parking Space</h2>
            <!-- <p>Using images to indicate how many slides there are in the slideshow, and highlight the image the user is currently viewing.</p> -->
          </div>
          
          <div class="w3-content" style="max-width:1200px">
            <img class="mySlides" src="https://wtc.co.th/wp-content/uploads/Smart-Parking.1.jpg" style="width:100%;display:none">
            <img class="mySlides" src="https://www.huntingtonplacedetroit.com/assets/img/P9391-60b6a36701.jpg" style="width:100%">
            <img class="mySlides" src="https://www.magnetic-access.com/files/data/sectors/parking/Parken_1280x989px.jpg" style="width:100%;display:none">
          
            <div class="w3-row-padding w3-section">
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src=" https://wtc.co.th/wp-content/uploads/Smart-Parking.1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="https://www.huntingtonplacedetroit.com/assets/img/P9391-60b6a36701.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="https://www.magnetic-access.com/files/data/sectors/parking/Parken_1280x989px.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <a href="{{ route('selectType') }}" class="btn btn-danger"><h1 style="font-size: 100px"><i class="bi bi-car-front-fill"></i> จอง</h1></a>
                
              </div>
            </div>
          </div>
          <script>
          function currentDiv(n) {
            showDivs(slideIndex = n);
          }
          
          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
          }
          </script>
         

@endsection
