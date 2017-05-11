@extends('layouts.main')

@section('content')

<section id ="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>รายสินค้าสั่งซื้อ</h2>
          <hr class="bottom-line">
                <div class="row">
                    <div class="col-xs-8 col-md-10 col-sm-9"></div>
                    <div class="col-xs-4 col-md-2 col-sm-3">  <p>
                        <a href="{{ url("product") }}">
                          <button name="button" type="button" class="btn btn-block btn-submit">
                          เพิ่มสินค้า <i class="fa fa-arrow-right"></i></button>
                        </a>
                      </p>
                  </div>
                </div>
            </div>
            @if($errors->any())
                <ul class="alert alert-danger">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
            @endif
        <table class="table  table-hover table-striped" >
            <tr>
                <th>เลขที่</th>
                  <th> รายการ </th>
                      <th>จำนวณ</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
            </tr>
            <?php $i = 1; ?>

            @forelse($buskets as $article)
            <tr >
                <td>  {{ $i }} </td>
                <td>  {{ $article->products->name }} </td>

                <td><b>  {{ $article->amount }}</b> @if($article->type==1) CC @else แผ่น @endif </td>
                <td><a href="#" data-target="#plus<?=$i?>" data-toggle="modal">แก้ไข</a>


                </td>
              <td>
                {!! Form::open(['method' => 'DELETE', 'url' => 'basket/'. $article->id ]) !!}
                <button type="submit" class="form contact-form-button light-form-button oswald light" onclick="return confirm('Are you sure to delete this data');">
                  X
                </button>
                <!-- {!! Form::submit('ลบ', ['class'=>'btn btn-block btn-submit']) !!} -->
                {!! Form::close() !!}

               </td>
                <!--Modal box add-->
                <div class="modal fade" id="plus<?=$i?>" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <!-- Modal content no 1-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center form-title">Edit {{ $article->idproduct }} </h4>
                      </div>
                      <div class="modal-body padtrbl">

                        <div class="login-box-body">
                          <div class="form-group">
                            <form action="{{ route('basket.add', ['id'=>$article->id]) }}">
                             <div class="form-group has-feedback">
                               <input type="hidden" name="edit" id="edit" value="plus" >
                                  <input class="form-control" name="amount" id="amount"  type="text" autocomplete="off" />
                                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                              </div>
                              <div class="row">
                                  <div class="col-xs-12">
                                    {!! Form::submit('ตกลง',
                                    ['class'=>'btn btn-green btn-block btn-flat']) !!}
                                  </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </tr>
            <?php $i++; ?>
              @empty
              <tr>
                <td class="text-center"  COLSPAN = "5"> ไม่มีสินค้าในตระกร้าสินค้า </td>
              </tr>
              @endforelse

        </table>
      </div>
      <div class="row" >
        <div class="col-xs-6 col-md-3 col-sm-4">
        <a href="#" data-target="#delete" data-toggle="modal" >
          <button name="button" type="button" class="btn btn-green btn-block btn-flat">
          ยกเลิก </button>
        </a>
        </div>
        <div class="col-xs-2 col-md-6 col-sm-4">
        </div>
        <div class="col-xs-6 col-md-3 col-sm-4">
        <a href="{{ url("invoice/create") }}">
          <button name="button" type="button" class="btn btn-green btn-block btn-flat">
          สั่งสินค้า <i class="fa fa-arrow-right"></i></button>
        </a>
        </div>
      </div>
      <!--Modal box delete-->
      <div class="modal fade" id="delete" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content no 1-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center form-title">คุณต้องการลบสินค้าในตระกร้าทั้งหมดหรือไม่</h4>
            </div>
            <div class="modal-body padtrbl">

              <div class="login-box-body">
                <p class="text-center"></p>
                <div class="form-group">
                    <form action="{{ route('request.delete', ['id'=>Auth::user()->id]) }}">
                      <button type="submit" class="btn btn-bg green btn-block"  >
                       Delete
                     </button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>

</section>

@endsection
