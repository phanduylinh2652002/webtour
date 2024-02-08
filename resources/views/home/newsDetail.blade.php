@extends('home.index')
@section('content')
<div class="untree_co-section">
  <div class="container my-5">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="title-tou__p">{{$newsDetail->new_name}}</p>
        <div class="owl-single dots-absolute owl-carousel">
          <img src="{{URL::to('/')}}/news/images/{{$newsDetail->new_image}}" alt="Free HTML Template by Untree.co" class="img-fluid">
          {{-- <img src="{{asset('app/images/slider-2.jpg')}}" alt="Free HTML Template by Untree.co" class="img-fluid">
          <img src="{{asset('app/images/slider-4.jpg')}}" alt="Free HTML Template by Untree.co" class="img-fluid"> --}}
        </div>
        <div class="custom-block point-special-tour" data-aos="fade-up">
          <div class="custom-accordion" id="accordion_1">
            {!!$newsDetail->new_description!!}
            <!-- .accordion-item -->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
    
  <script>
      var myHeader = document.querySelector(".site-nav"); 
      myHeader.classList.add("site-nav__color");
  </script>
@endsection