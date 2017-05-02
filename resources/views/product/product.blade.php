@extends('layouts.main')




  <section id ="feature" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="header-section text-center">
						<h2>สินค้า</h2>
						<hr class="bottom-line">
                  <div class="row">
                      <div class="col-xs-8 col-md-10 col-sm-9"></div>
                      <div class="col-xs-4 col-md-2 col-sm-3">  <p>
                        	<a href="{{ url("product/create") }}">
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
											<th> รายละเอียด </th>
												<th> ขนาด </th>
												<th> ราคา </th>
												<th> ประเภท </th>



							</tr>
							<?php $i = 1; ?>
							@foreach($products as $article)
							<tr>
								 	<td>  {{ $i }} </td>
									<td> <a href="{{ url('product/'. $article->id) }}">
										 				{{ $article->name }}
												</a>
									</td>
									<td>  {{ $article->detail }} </td>
									<td>  {{ $article->size }} </td>
									<td>  {{ $article->price }} </td>
									<td>   </td>


							</tr>
							<?php $i++; ?>
								@endforeach

					</table>
				</div>
			</div>

	</section>

@section('content')
