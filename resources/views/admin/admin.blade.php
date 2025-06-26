@extends('layouts.header')
@section('title','User Menager')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{-- แสดงข้อความ message ออกมา --}}
    <p>{{ $message }}</p>
</div>
@endif
<p>ตาราง Admin :</p>
<div>
{{-- <a href="{{ url('/admin/createAdmin') }}" class="btn btn-success">Create Admin</a> --}}
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Admin
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
          
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>AdminFName</strong>
                            <input type="text" name="AdminFName" class="form-control" placeholder="AdminFName">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('AdminFName')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>AdminLName</strong>
                            <input type="text" name="AdminLName" class="form-control" placeholder="AdminLName">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('AdminLName')
                                {{-- ดึงข้อความจากตัวแปร message --}}
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>PhoneNumber</strong>
                            <input type="number" name="PhoneNumber" class="form-control" placeholder="PhoneNumber">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('PhoneNumber')
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
<th>AdminID</th>
<th>AdminFName</th>
<th>AdminLName</th>
<th>AdminPhone</th>

</tr>
@foreach ($admin as $item)
<tr>
    <td>{{ $item->AdminID }}</td>
    <td>{{ $item->AdminFName }}</td>
    <td>{{ $item->AdminLName }}</td>
    <td>{{ $item->AdminPhone }}</td>
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
