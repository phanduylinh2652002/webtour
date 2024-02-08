@extends('admin.admin')
@section('content')
<div style="min-height: 650px">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
        <h3 class="text-white text-capitalize ps-3">Sửa Tour</h3>
        <button class="btn  ">
            <a class="text-white" href="{{route('account.index')}}">Quay lại</a>
        </button>
    </div>
    <form role="form" class="text-start" action="{{route('account.update', $account->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Tên account</label> <br>
          <input type="text" class="form-control" name="name" value="{{$account->name}}">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Tên account</label> <br>
            <input type="text" class="form-control" name="email" value="{{$account->email}}">
        </div>
            <input type="hidden" class="form-control" name="password" value="{{$account->password}}">
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Tên account</label> <br>
            <input type="text" class="form-control" name="type" value="{{$account->type}}">
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-primary my-4 mb-2">Sửa</button>
        </div>
    </form>
</div>
@endsection
@section('ckeditor')
    <script>
        ClassicEditor
            .create(document.getElementById('new_desc'))
            .catch(error =>{
                console.error(error);
            });
    </script>
@endsection