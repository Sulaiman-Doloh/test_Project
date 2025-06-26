<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container mt-2">
        <h1 class="text-center">createmCustomer</h1>
        <div>
            <a href="{{ url('/admin') }}" class="btn btn-primary">Back</a>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{-- ถ้ามี session จะดึง session status มาแสดง --}}
                {{ session('status') }}
            </div>
        @endif
        <form action="{{url('/admin')}}" method="post" enctype="multipart/form-data">
            @csrf
            
                <div class="col-md-12">
                    <div class="form-group my-3">
                        <strong>AdminFName</strong>
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
                        <strong>AdminLName</strong>
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
    
</body>
</html>