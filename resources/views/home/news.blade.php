@extends('home.index')
@section('content')
<div class="untree_co-section">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="title-tou__p" data-aos="fade-up" data-aos-delay="500" style="font-size: 35px;">TIN TỨC </p>
                <p class="title-tou__p" data-aos="fade-up" data-aos-delay="500" style="font-size: 12px;">Cập nhật
                    tin tức hàng ngày </p>
                <!--item  -->
                @foreach ($news as $n)
                    
                <div class="wrapper-item-tour-list" data-aos="fade-left" data-aos-delay="100" style="background-color: white;">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <img src="{{URL::to('/')}}/news/images/{{$n->new_image}}" alt="Free HTML Template by Untree.co" class="img-fluid">
                        </div>
                        <div class="col-lg-8">
                            <p class="title-tour-list font-weight-bold font-size-p" style="margin-top: 10px;">
                               <a href="{{url('newsDetail', $n->new_id)}}" class="title-tour-list__line">{{$n->new_name}}</a> 
                            </p>
                            <p>Ngày đăng: <span>{{date('d-m-Y', strtotime($n->new_date))}}</span></p>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                @endforeach
            </div>
        </div>
    </div>
</div>
    
  <script>
      var myHeader = document.querySelector(".site-nav"); 
      myHeader.classList.add("site-nav__color");
  </script>
@endsection