@extends('layouts.app')

@section('content')

{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body {
      font-family: "Prompt", sans-serif;
      font-size: 18px;
      background-image: url(img/2veek29rath51.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
</head>
<!-- class="bg-dark" -->

<body> --}}
    <!-- navbar -->
    {{-- <header class="p-3 mb-3 border-bottom bg-body" id="top">
        <div class="container ">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="img/Norma.jpg" style="width: 40px; height: 32px;border-radius: 100%;" />
                </a>
                
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="#" class="nav-link px-2 link-secondary">Home</a>
                    </li>
                    <li><a href="store_form.php" class="nav-link px-2 link-dark">Insert data</a></li>
                    <li><a href="store_select.php" class="nav-link px-2 link-dark">Data product</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
                </ul>
                
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
                </form>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-dark me-2">
                        Login
                    </button>
                    <a href="formlint.html"><button type="button" class="btn btn-warning">Sign-up</button></a>
                </div>
            </div>
        </div>
    </header> --}}
    
        @csrf
  <!-- end navbar -->
  <div class="container mt-5 mb-5 ">
    <!-- text-light -->
    <div class="text-center mb-5">
      <h1 class="display-5">การจองที่จอดรถ</h1>
      {{-- <p>ร้าน 7</p> --}}
    </div>

    <form action="{{ route('storeresere_parking') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <!-- paper -->
      <div class="bg-light shadow-sm mx-auto p-5" style="width: 80%; height: auto; border-radius: 21px; ">
        <div class="row g-3 my-3">
            <div class="col-12 text-end">
               @if($selectType == 1)
               <img src="/../parking_img/motorbike.png"
               style="height: auto;width:10%">
               @else
               <img src="/../parking_img/racing-car.png"
                            style="height: auto;width:10%">
               @endif
            </div>

            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>เลขทะเบียนรถ</strong>
                    <input type="text" name="CarRegistration" class="form-control" placeholder="CarRegistration">
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    @error('CarRegistration')
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Paystatus</strong>
                    <input type="text" name="text" class="form-control" placeholder="Paystatus"> --}}
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    {{-- @error('Paystatus') --}}
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        {{-- <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}

            {{-- <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Payment method id</strong>
                    <input type="number" name="PayID" class="form-control" placeholder="PayID"> --}}
                     {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                     {{-- @error('PayID')  --}}
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        {{-- <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>  --}}

            {{-- <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Img payment</strong>
                    <input type="text" name="img" class="form-control" placeholder="img"> --}}
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    {{-- @error('img') --}}
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        {{-- <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}

            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>เวลาเข้าจอด</strong>
                    <input type="datetime-local" name="Time_in" class="form-control" placeholder="Time_in">
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                
                    @error('Time_in')
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>เวลาออก</strong>
                    <input type="datetime-local" name="Time_out" class="form-control" placeholder="Time_out">
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    @error('Time_out')
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>รหัสที่จอดรถ</strong>
                    {{-- <input type="text" name="Parking_id" class="form-control" placeholder="Parking_id"> --}}
                    <select class="form-select" aria-label="Default select example" name="ParkingID">
                        @foreach($parkings as $parking)
                        <option value="{{$parking->ParkingID}}">
                            @if($parking->TypeID == 2)C
                            @else B 
                            @endif{{$parking->ParkingID}}</option>
                        @endforeach
                      </select>
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    @error('ParkingID')
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>PayTheFine</strong>
                    <input type="text" name="PayTheFine" class="form-control" placeholder="PayTheFine"> --}}
                    {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                    {{-- @error('PayTheFine') --}}
                        {{-- ดึงข้อความจากตัวแปร message --}}
                        {{-- <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}

            



          {{-- <div class="col">
            <label class="form-label" for="">ชื่อสินค้า</label>
            <input class="form-control" type="text" name="pro_name" id="" />
          </div>
          <div class="col-3">
            <label class="form-label" for="">ประเภทสินค้า</label>
            <select class="form-select" aria-label="Default select example" name="pro_type">
              <option value="ขนม">ขนม</option>
              <option value="เครื่องดื่ม">เครื่องดื่ม</option>
              <option value="ขนมปัง">ขนมปัง</option>
              <option value="เครื่องเขียน">เครื่องเขียน</option>
            </select>
          </div> --}}

          <div class="col-3">
            <label class="form-label" for="">ราคา</label>
            <input class="form-control" type="number" step="0.01" name="pro_price" min="0" max="99999.99" />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="">วิธีการชำระเงิน</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="PayID" value="1" />
            <label class="form-check-label">เงินสด</label>
          </div>
          {{-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pro_maney" value="เครดิต" />
            <label class="form-check-label">เครดิต</label>
          </div> --}}
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="PayID" value="2" />
            <label class="form-check-label">โอน</label>
          </div>
        </div>

        {{-- <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="ที่อยู่" id="floatingTextarea2" style="height: 150px" name="pro_detel"></textarea>
          <label for="floatingTextarea2">รายละเอียดสินค้า</label>
        </div> --}}
        <div class="mb-3">
            <img src="/../parking_img/prompay.jpg"style="height: auto;width:20%" alt="">
          <label for="">โปรดแนบสลิป:</label>
          <input type="file" name="imgUpload" id="">
        </div>


        <div class="pb-5">
          <input class="btn btn-warning col-2" id="sub" type="submit" value="บันทึก" />
          <input class="btn btn-danger" type="reset" value="ล้าง" />
        </div>



      </div>
      <!-- end paper -->
    {{-- </form> --}}
  </div>
  <a href="#top">
    <span style="position: fixed; bottom: 5%; right: 5% ; ">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16 " style="color:#ffc107">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
      </svg>
    </span>
  </a>
  <!-- ที่ต้องเปลี่ยน -->
  <!-- action  -->
    </form>

@endsection
{{-- </body>

</html> --}}