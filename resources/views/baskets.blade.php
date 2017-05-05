@extends('layouts.main')

@section('content')

<section id ="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>รายสินค้าทสั่งซื้อ</h2>
          <hr class="bottom-line">
                <div class="row">
                    <div class="col-xs-8 col-md-10 col-sm-9"></div>
                    <div class="col-xs-4 col-md-2 col-sm-3">  <p>
                        <a href="{{ url("") }}">
                          <button name="button" type="button" class="btn btn-block btn-submit">
                          เพิ่มสินค้า <i class="fa fa-arrow-right"></i></button>
                        </a>
                      </p>
                  </div>
                </div>
        <table class="table  table-hover table-striped ">
            <tr>
                <th>เลขที่</th>
                  <th> รายการ </th>
                      <th> ขนาด </th>
                      <th></th>
                      <th> ราคา </th>
            </tr>
            <?php $i = 1; ?>
            @foreach($buskets as $article)
            <tr>
                <td>  {{ $i }} </td>
                <td> <a href="{{ url('product/'. $article->id) }}">
                          {{ $article->name }}
                      </a>
                </td>
                <td>  {{ $article->idproduct }} </td>
                <td>  {{ $article->type }} </td>
                <td>  {{ $article->amount }} </td>
                <td>   </td>


            </tr>
            <?php $i++; ?>
              @endforeach

        </table>
      </div>
    </div>

</section>

@endsection
