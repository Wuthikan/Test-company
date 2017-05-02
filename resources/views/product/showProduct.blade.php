@extends('layouts.main')
<!--Organisations-->
<section id ="organisations" class="section-padding">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
          @if($products->pic)
  					<img src="{{ url($products->pic) }}"
  						class="img-responsive"
              style="max-height: 400px"
  						>
  				@else
          <img src="{{ url("mentor/img/course01.jpg") }}"
              class="img-responsive"
              >
          @endif
      </div>
      <div class="col-md-6">
        <div class="detail-info">

          <hgroup>
            <h3 class="det-txt"> {{ $products->name }}</h3>
            <h4 class="sm-txt">{{ $products->price }} ฿</h4>
          </hgroup>
            <p class="det-p">{{ $products->detail }}</p>
            <p class="text-par">ขนาด: {{ $products->size }}<br>ประเภท: {{ $products->type }}</p>
            </p>
            <div class="row">
                <div class="col-xs-4 col-md-3 col-sm-3">
                  <a class="btn btn-block btn-submit" href="{{ url("product/{$products->id}/edit") }}">
                      แก้ไข
                  </a>
                </div>
                <div class="col-xs-4 col-md-6 col-sm-6"></div>
                <div class="col-xs-4 col-md-3 col-sm-3">
                  {!! Form::open(['method' => 'DELETE', 'url' => 'product/'. $products->id ]) !!}
            			{!! Form::submit('ลบ', ['class'=>'btn btn-block btn-submit']) !!}
            			{!! Form::close() !!}
              </div>
            </div>



      </div>
    </div>
  </div>
</section>


@section('content')
