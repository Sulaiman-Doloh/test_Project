@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="/../parking_img/motorbike.png" style="height: auto;width:10%">
            </div>
        </div>
        <div class="row">
          {{-- foreach ทำซ้ำ --}}
          @foreach ($databriks as $databrik)
              <div class="col-2">
                  @if($databrik->stetas == 0)
                  <img src="/../parking_img/motorbikeGreen.png" style="height: auto;width:100%">        
                  <p class="text-center" >ว่าง<br> B{{ $databrik->ParkingID }}</p>
                  @else
                  <img src="/../parking_img/motorbikeRed.png" style="height: auto;width:100%">
                  <p class="text-center" >ไม่ว่าง<br> B{{ $databrik->ParkingID }}</p>
                @endif
              </div>
            @endforeach
                <div class="row">
            <div class="col-12 text-center">
                <img src="/../parking_img/racing-car.png" style="height: auto;width:10%">
            </div>
        </div>
        </div>
        <div class="row">
          @foreach ($datacars as $datacar)
              <div class="col-2">
                @if($datacar->stetas == 0)
                <img src="/../parking_img/racing-carGreen.png" style="height: auto;width:100%">
                <p class="text-center" >ว่าง<br> C{{ $datacar->ParkingID }}</p>

                @else
                <img src="/../parking_img/racing-carRed.png" style="height: auto;width:100%">
                <p class="text-center" >ไม่ว่าง<br> C{{ $datacar->ParkingID }}</p>

                @endif
              </div>
          @endforeach
          
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ route('selectType') }}" class="btn btn-danger">
                    <h1 style="font-size: 100px"><i class="bi bi-car-front-fill"></i> จอง</h1>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="col-4 pt-2 pb-50">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8iE7y8iD0qdzlpjW-L71CQm998WTDIzMc0pEX-LliNY1zQSFGyfZuZw3osD9Wgl8r3qw&usqp=CAU" class="rounded float-start" alt="รูปภาพที่อธิบาย1">
          </div>
            <img src="https://media.istockphoto.com/id/1235662202/vector/car-automobile-parking-sign-icon-with-circle-shape.jpg?s=612x612&w=0&k=20&c=aCyUQ4jmvTUfYN4fwcC_1KcYyQOsIdRotOA6FcifJcg=" class="float-start" alt="Paris" width="300" height="290"> 
          </div> --}}

    {{-- <div class="w3-content" style="max-width:1200px">
            
            <div class="w3-row-padding w3-section">
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="https://www.w3schools.com/w3css/img_snow_wide.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="https://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="https://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
              </div>
            </div>
          </div> --}}

    {{-- <script>
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
          </script> --}}
@endsection
