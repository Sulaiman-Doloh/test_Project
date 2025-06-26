@extends('layouts.header')
@section('title','User Menager')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{-- แสดงข้อความ message ออกมา --}}
    <p>{{ $message }}</p>
</div>
@endif
<p>ตาราง Payment method :</p>
<div>
{{-- <a href="{{ url('/admin/createAdmin') }}" class="btn btn-success">Create Admin</a> --}}
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create Payment method
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
          
            <form action="{{ url('/payment_method') }}" method="post" enctype="multipart/form-data">
                @csrf
    
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="name">
                            {{-- เช็ก error ถ้าทำไรผิดพลาดหรือไม่ใส่ชื่อ(validate) --}}
                            @error('name')
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
<th>Name</th>

</tr>
@foreach ($payment_method as $item)
<tr>
    <td>{{ $item->PayID }}</td>
    <td>{{ $item->name }}</td>
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
