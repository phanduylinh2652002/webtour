@extends('home.index')
@section('content')
<div class="untree_co-section">
    <div class="container my-5 d-flex justify-content-center">
    <h1 class="col-lg-6"> Thanh toán thành công <br>
        <a href="{{ url('/') }}" type="button" class="btn btn-primary">Trang chủ</a>
    </h1>
</div>
    <script>
        var myHeader = document.querySelector(".site-nav"); 
        myHeader.classList.add("site-nav__color");
    </script>
@endsection