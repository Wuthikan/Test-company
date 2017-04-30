@extends('layouts.main')

@section('content')
<!--Courses-->
<section id ="courses" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>คำนวณ</h2>

        <hr class="bottom-line">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 padleft-right">
        <figure class="imghvr-fold-up">
          <img src="mentor/img/course01.jpg" class="img-responsive">
          <figcaption>
              <h3>คอนกรีทผสม</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
          </figcaption>
          <a href="{{ url('/concrette') }}"></a>
        </figure>
      </div>
      <div class="col-md-6 col-sm-6 padleft-right">
        <figure class="imghvr-fold-up">
          <img src="Mentor/img/course02.jpg" class="img-responsive">
          <figcaption>
              <h3>คอนกรีทแผ่น</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
          </figcaption>
          <a href="{{ url('/concrettebox') }}"></a>
        </figure>
      </div>




    </div>
  </div>
</section>
<!--/ Courses-->
@endsection
