@extends('layouts.header')
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
          
            <form action="{{ url('/userr')}}" method="post" enctype="multipart/form-data">
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



 {{-- <a href="{{ url('/customer')}}" class="btn btn-success">Create Customer</a> --}}

<table class="table">
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Phone</th>
<th>Email Address</th>
<th>Password</th>
{{-- <th>Confirm Password</th> --}}

</tr>
@foreach ($User as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->FirstName }}</td>
    <td>{{ $item->LastName }}</td>
    <td>{{ $item->Phone }}</td>
    <td>{{ $item->email}}</td>
    <td>{{ $item->password}}</td>
    {{-- <td>{{ $item->Confirm_Password}}</td> --}}
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
