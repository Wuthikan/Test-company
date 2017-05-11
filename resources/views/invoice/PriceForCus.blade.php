@extends('layouts.main')




  <section id ="feature" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="header-section text-center">
						<h2>สินค้า</h2>
						<hr class="bottom-line">
            @if($errors->any())
                  @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                    <button type="button" class="close"
                      data-dismiss="alert" aria-label=:"Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                    <?php session()->flash('flash_message',$error) ?>
                    {{ session()->get('flash_message') }}
                  </div>
                  @endforeach
            @endif
					<table class="table  table-hover table-striped ">
							<tr>
								 	<th>เลขที่</th>
										<th> รายการ </th>
                    <th> ราคา </th>
											<th> จำนวน </th>
												<th> รวม </th>




							</tr>
							<?php $i = 1; $total = 0; ?>
							@foreach($baskets as $baskets)
							<tr>
								 	<td>  {{ $i }} </td>
									<td>	{{ $baskets->products->name }}</td>
									<td> {{ $baskets->products->price }} </td>
									<td> {{ $baskets->amount }}  </td>
									<td> <?php $to = $baskets->products->price * $baskets->amount;
                        echo $to;    ?>  </td>

                  <?php $total = $total+$to ; ?>

							</tr>
							<?php $i++; ?>
								@endforeach
              <tr>
                  <td colspan="3" > </td>
                  <td><b>ราคารวม</b></td>
                  <td><b><?=$total?>
                    {!! Form::open(['url' => 'invoice', 'name' => 'form1']) !!}
                    <input type="hidden" name="price" id="price" value="<?=$total?>" onkeyup='plus()' >
                    <input type="hidden" name="idemployee" id="idemployee" value="<?=Auth::user()->id?>">
                    {!! Form::input('hidden', 'published_at', \Carbon\Carbon::now()->format('Y-m-d')) !!}
                  </b></td>
              </tr>
              <tr>
                  <td colspan="3" > </td>
                  <td><b>ส่วนลด</b></td>
                  <td><input type"text" name="discount" id="discount" onkeyup='plus()'  >
                  </td>
              </tr>
              <tr>
                  <td colspan="3" > </td>
                  <td><b>ราคารวมสุทธิ</b></td>
                  <td><input type"text" name="lastprice" id="lastprice" onkeyup='plus()' ></td>

              </tr>
					</table>
          <div class="row" >
            <div class="col-xs-6 col-md-3 col-sm-4">
            <a href="{{ url("basket") }}" >
              <button name="button" type="button" class="btn btn-green btn-block btn-flat">
              ย้อนกลับ </button>
            </a>
            </div>
            <div class="col-xs-2 col-md-6 col-sm-4">
            </div>
            <div class="col-xs-6 col-md-3 col-sm-4">

              <button name="button" type="submit" class="btn btn-green btn-block btn-flat">
              สั่งสินค้า <i class="fa fa-arrow-right"></i></button>

                </form>
            </div>
          </div>
				</div>

			</div>
        <script language='javascript' type='text/javascript'>
           function plus(){
          var one = document.form1.price.value;
          var two = document.form1.discount.value;
          if(one == "" || two == ""){return false;}
          var three = 0;
          three = Number(one)  - Number(two);
           form1.lastprice.value = three;
          }
         </script>

	</section>


@section('content')
