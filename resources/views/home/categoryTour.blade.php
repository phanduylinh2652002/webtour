@extends('home.index')
@section('content')
<div class="untree_co-section">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="title-tou__p" data-aos="fade-up" data-aos-delay="500" style="font-size: 35px;">DU LỊCH {{$categories->category_name}}</p>
                <p class="title-tou__p" data-aos="fade-up" data-aos-delay="500" style="font-size: 12px;">Cập nhật
                    hàng ngày danh sách tour du lịch {{$categories->category_name}}</p>
                <!--item  -->
                @foreach ($tour as $t)
                    
                <div class="wrapper-item-tour-list" data-aos="fade-left" data-aos-delay="100">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <img src="{{URL::to('/')}}/images/{{$t->tour_image}}" alt="Free HTML Template by Untree.co" class="img-fluid">
                        </div>
                        <div class="col-lg-8">
                            <p class="title-tour-list font-weight-bold font-size-p" style="margin-top: 10px;">
                               <a href="{{url('detailTour', $t->tour_id)}}" class="title-tour-list__line">{{$t->tour_name}}</a> 
                            </p>
                            <p>Hành trình: <span> {{$t->tour_place}}</span></p>
                            <p>Phương tiện: <span>{{$t->tour_vehicle}}</span></p>
                            <p>Khởi hành: <span>{{$t->tour_dateStart}}</span></p>
                            <div class="time-tour-list">
                                <div class="time-tour-list-left">
                                    <span><i class="fa-solid fa-clock"></i> {{$t->tour_quantytiDate}}</span>
                                </div>
                                <div class="time-tour-list-right">
                                    @if($t->tour_discount > 0)
                                    <p>{{number_format($t->tour_discount)}} đ 
                                        <span style="font-size: 15px; font-weight: lighter; text-decoration: line-through;">
                                            {{number_format($t->tour_price)}} đ</span>
                                    </p>
                                    @else
                                    <p>{{number_format($t->tour_price)}} đ </span>
                                    </p>
                                    @endif
                                </div>
                            </div>
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