@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row h-100 justify-content-center align-items-end">
        <div class="col-12 text-center mb-2">
            <img src="{{asset('assets/img/ci.png')}}" class="img-fluid mb-3" style="width: 70px;" alt="">
            <p>誠翊資訊網路應用事業</p>
        </div>
    </div>
</div>
@endsection
<style>
    .content-wrapper {
        height: calc(100vh - 60px) !important;
        background-image: url(../assets/img/chenibg01.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
@push('page_css')


@endpush
