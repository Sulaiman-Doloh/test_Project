@extends('layouts.header')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{-- แสดงข้อความ message ออกมา --}}
    <p>{{ $message }}</p>
</div>
@endif
<p>ตาราง Parking :</p>
<table>
    <tr>
<th>CarRegistration</th>
<th>Paystatus</th>
<th>Time_in</th>
<th>Time_out</th>
<th>Price</th>
    </tr>
    @foreach($data as $item)
    <tr>
        
        <td>{{ $item->CarRegistration }}</td>
        <td>{{ $item->Paystatus }}</td>
        <td>{{ $item->Time_in }}</td>
        <td>{{ $item->Time_out }}</td>
        <td>{{ $item->Price }}</td>

       
    </tr>
     @endforeach
</table>

@endsection
