@extends('layouts.app')
@section('title','User Menager')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{-- แสดงข้อความ message ออกมา --}}
    <p>{{ $message }}</p>
</div>
@endif
<p>ตาราง Userr :</p>
<div>
{{-- <a href="{{ url('/admin/createAdmin') }}" class="btn btn-success">Create Admin</a> --}}
</div>


<h2 class="text-center">Parking Space</h2>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Userr
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form action="{{ url('/user')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>FirstName</strong>
                            <input type="text" name="FirstName" class="form-control" placeholder="FirstName">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('FirstName')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>LastName</strong>
                            <input type="text" name="LastName" class="form-control" placeholder="LastName">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('LastName')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Phone</strong>
                            <input type="number" name="Phone" class="form-control" placeholder="Phone">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Phone')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Email Address</strong>
                            <input type="text" name="email" class="form-control" placeholder="email">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('email')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Password</strong>
                            <input type="text" name="Password" class="form-control" placeholder="Password">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Password')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Confirm Password</strong>
                            <input type="text" name="Password" class="form-control" placeholder="Confirm Password">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Confirm Password')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
    
                    <div class="col md-12 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
    
                </div>
    
            </form>

        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>



{{-- <header>
  <h1>ระบบการจองที่จอดรถ</h1>
</header>
<div class="reservation-form">
  <h2>กรอกข้อมูลการจอง</h2>
  <form id="reservation-form">
      <label for="name">ชื่อ:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">อีเมล:</label>
      <input type="email" id="email" name="email" required>

      <label for="date">วันที่:</label>
      <input type="date" id="date" name="date" required>

      <label for="parking-lot">ที่จอดรถ:</label>
      <select id="parking-lot" name="parking-lot" required>
          <option value="lot1">C01</option>
          <option value="lot1">D01</option>
          <option value="lot2">P01</option>
          <option value="lot3">B01</option>
          <option value="lot3">F0</option>
      </select>

      <button type="submit">จองที่จอดรถ</button>
  </form>
</div>
<footer>
  <p>&copy; 2023 ระบบการจองที่จอดรถ</p>
</footer>
<script src="script.js">
  document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservation-form');

    reservationForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(reservationForm);
        const name = formData.get('name');
        const email = formData.get('email');
        const date = formData.get('date');
        const parkingLot = formData.get('parking-lot');

        // ทำตราส่งข้อมูลการจองไปยังเซิร์ฟเวอร์ที่คุณเชื่อมต่อ
        // ตราส่งข้อมูลไปยังฐานข้อมูลหรือเซิร์ฟเวอร์ API
        // และจัดการกับการยืนยันการจองหรือข้อผิดพลาด
    });
});

</script> --}}
          {{-- <div class="col-12">
            <div class="col-4">
              <button type="button" class="btn"></button>
              <button type="button" class="btn btn-success">C01</button>
              <button type="button" class="btn btn-success">C02</button>
              <button type="button" class="btn btn-success">C03</button>
              <button type="button" class="btn btn-success">C04</button>
            </div>
            <div class="col-4 pt-2">
              <button type="button" class="btn"></button>
              <button type="button" class="btn btn-success">D01</button>
              <button type="button" class="btn btn-success">D02</button>
              <button type="button" class="btn btn-success">D03</button>
              <button type="button" class="btn btn-success">D04</button>
            </div>
            <div class="col-4 pt-2">
              <button type="button" class="btn"></button>
              <button type="button" class="btn btn-success">P01</button>
              <button type="button" class="btn btn-success">P02</button>
              <button type="button" class="btn btn-success">P03</button>
              <button type="button" class="btn btn-success">P04</button>
            </div>
            <div class="col-4 pt-2">
              <button type="button" class="btn"></button>
              <button type="button" class="btn btn-success">F01</button>
              <button type="button" class="btn btn-success">F02</button>
              <button type="button" class="btn btn-success">F03</button>
              <button type="button" class="btn btn-success">F04</button>
            </div>
            <div class="col-4 pt-2 pb-2">
              <button type="button" class="btn"></button>
              <button type="button" class="btn btn-success">B01</button>
              <button type="button" class="btn btn-success">B02</button>
              <button type="button" class="btn btn-success">B03</button>
              <button type="button" class="btn btn-success">B04</button>
            </div>
          </div> --}}



 {{-- <a href="{{ url('/customer')}}" class="btn btn-success">Create Customer</a> --}}

{{-- <table class="table">
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Phone</th>
<th>Email Address</th>
<th>Password</th>
<th>Confirm Password</th>

</tr>
@foreach ($userr as $item)
<tr>
    <td>{{ $item->ID }}</td>
    <td>{{ $item->FirstName }}</td>
    <td>{{ $item->LastName }}</td>
    <td>{{ $item->Phone }}</td>
    <td>{{ $item->Email_Address}}</td>
    <td>{{ $item->Password}}</td>
    <td>{{ $item->Confirm_Password}}</td>
    <td>
        <a href="#"
            class="btn btn-warning">Edit</a>
        <a href="#"
            class="btn btn-danger">Delete</a>
    </td> --}}
{{-- </tr> --}}
{{-- @endforeach
</table> --}}
    
@endsection
