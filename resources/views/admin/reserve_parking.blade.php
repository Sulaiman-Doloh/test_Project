@extends('layouts.header')
@section('title','User Menager')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{-- แสดงข้อความ message ออกมา --}}
    <p>{{ $message }}</p>
</div>
@endif
<p>ตาราง Reserve a parking space :</p>
<div>
{{-- <a href="{{ url('/admin/createAdmin') }}" class="btn btn-success">Create Admin</a> --}}
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Reserve parking
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
          
            <form action="{{ url('/reserve_paring') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>CarRegistration</strong>
                            <input type="text" name="name" class="form-control" placeholder="name">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('name')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Paystatus</strong>
                            <input type="text" name="Paystatus" class="form-control" placeholder="Paystatus">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Paystatus')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Payment method id</strong>
                            <input type="number" name="PayID" class="form-control" placeholder="PayID">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('PayID')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Img payment</strong>
                            <input type="text" name="img" class="form-control" placeholder="img">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('img')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Time_in</strong>
                            <input type="text" name="Time_in" class="form-control" placeholder="Time_in">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Time_in')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Time_out</strong>
                            <input type="text" name="Time_out" class="form-control" placeholder="Time_out">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Time_out')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Parking id</strong>
                            <input type="text" name="Parking_id" class="form-control" placeholder="Parking_id">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('Parking_id')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>PayTheFine</strong>
                            <input type="text" name="PayTheFine" class="form-control" placeholder="PayTheFine">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('PayTheFine')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>UserId</strong>
                            <input type="text" name="UserId" class="form-control" placeholder="UserId">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('UserId')
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



 {{-- <a href="{{ url('/customer')}}" class="btn btn-success">Create Customer</a> --}}

<table class="table">
<tr>
<th>ParID</th>
<th>UserId</th>
<th>CarRegistration</th>
{{-- <th>Paystatus</th> --}}
<th>PayID</th>
<th>Time in</th>
<th>Time out</th>
<th>Parking id</th>
{{-- <th>PayTheFine</th> --}}
<th>Img payment</th>

</tr>
@foreach ($reserve_parking as $item)
<tr>
    <td>{{ $item->ParID }}</td>
    <td>{{ $item->UserId }}</td>
    <td>{{ $item->CarRegistration }}</td>
    {{-- <td>{{ $item->Paystatus }}</td> --}}
    <td>{{ $item->PayID }}</td>
    <td>{{ $item->Time_in }}</td>
    <td>{{ $item->Time_out }}</td>
    <td>{{ $item->ParkingID  }}</td>
    {{-- <td>{{ $item->PayTheFine }}</td> --}}
    <td>{{ $item->Img_payment }}</td>
    <td>
        <a href="#"
            class="btn btn-warning">Edit</a>
        <a href="#"
            class="btn btn-danger">Delete</a>
    </td>
</tr>
@endforeach
</table>
    
@endsection
