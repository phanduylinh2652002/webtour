@extends('admin.admin')
@section('content')
<div style="min-height: 650px">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
        <h3 class="text-white text-capitalize ps-3">Cập nhật thông tin hướng dẫn viên</h3>
        <button class="btn  ">
            <a class="text-white" href="{{route('tourguide.index')}}">Quay lại</a>
        </button>
    </div>
    <form role="form" class="text-start" action="{{route('tourguide.update', $tourguide->tourGuide_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Họ tên</label> <br>
          <input type="text" class="form-control" name="tourGuide_name" value="{{$tourguide->tourGuide_name}}">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="tourGuide_email" value="{{$tourguide->tourGuide_email}}">
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="tourGuide_phone" value="{{$tourguide->tourGuide_phone}}">
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="tourGuide_address" value="{{$tourguide->tourGuide_address}}">
          </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-primary my-4 mb-2">Sửa</button>
        </div>
    </form>
</div>
@endsection