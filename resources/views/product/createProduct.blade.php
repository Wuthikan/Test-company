@extends('layouts.main')
<section id ="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>เพิ่มสินค้า</h2>

        <hr class="bottom-line">
        @if($errors->any())
      			<ul class="alert alert-danger">
      				@foreach($errors->all() as $error)
      					<li>{{ $error }}</li>
      				@endforeach
      			</ul>
      	@endif
      </div>


          {!! Form::open(['url' => 'product', 'files' => true]) !!}

              <div class="form-group">
              {!! Form::label('title', 'ชื่อสินค้า')
              !!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}

              </div>
              <div class="form-group">
              {!! Form::label('image', 'รูปภาพสินค้า: ') !!}
              {!! Form::file('pic', null) !!}
              </div>
              <div class="form-group">
              {!! Form::label('body', 'ขนาดสินค้า:') !!}
              {!! Form::text('size', null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
              {!! Form::label('body', 'ราคา:') !!}
              {!! Form::text('price', null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
              {!! Form::label('body', 'รายละเอียดสินค้า:') !!}
              {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
              {!! Form::label('body', 'ประเภทสินค้า:') !!}
              <select class="form-control" name="type">
              	@foreach($typeproducts as $type)
                 <option value="{{ $type->id }}" >  {{ $type->name }}</option>
                @endforeach
               </select>
              </div>
                <hr class="bottom-line">
              <div class="form-group">

              {!! Form::submit('เพิ่มสินค้า',
              ['class'=>'btn btn-block btn-submit']) !!}
              </div>
      {!! Form::close() !!}
    </div>
  </div>
</section>


@section('content')
