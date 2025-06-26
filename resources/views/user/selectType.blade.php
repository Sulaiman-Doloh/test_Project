@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5">
            {{-- รถ --}}
            <div class="col-6 text-center">
                <form action="{{ route('parking') }}" method="get">
                    @csrf
                    @method('get')
                    <input type="hidden" name="selectType" value="2">
                    <button type="submit" class="btn btn-light"> <img src="/../parking_img/racing-car.png"
                            style="height: auto;width:100%"></button>
                </form>
            </div>
            {{-- มอไซ --}}
            <div class="col-6 text-center">
                <form action="{{ route('parking') }}" method="get">
                    @csrf
                    @method('get')
                    <input type="hidden" name="selectType" value="1">
                    <button type="submit" class="btn btn-light"><img src="/../parking_img/motorbike.png"
                            style="height: auto;width:100%"></button>
                </form>

            </div>
        </div>
    </div>
@endsection
