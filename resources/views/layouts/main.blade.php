<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
      <title>company</title>
      {!! HTML::style('bootstrap/css/bootstrap.min.css') !!}
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#">หน้าหลัก</a></li>
                  <li><a href="#">สินค้า</a></li>
                  <li><a href="#">คำนวณ</a></li>
                  <li><a href="#">ตระกร้าสินค้า</a></li>
                  <li><a href="#">ตารางส่งของ</a></li>
                  <li><a href="#">ข้อมูลลูกค้า</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                      <li class="dropdown">
                        @if (Auth::check())
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>

                                  <ul class="dropdown-menu">
                                    <li><a href="#">ข้อมูลส่วนตัว</a></li>
                                    <li><a href="#">Picture</a></li>
                                      <li role="separator" class="divider"></li>
                                      <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                            </form>
                                      </li>
                                  </ul>
                           @else
                                  <a href="/login" > เข้าสู่ระบบ </span></a>

                           @endif


                      </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
      </div>
    </div>
  </div>

        @yield('content')

    {!! HTML::script('js/jquery-3.2.1.min.js') !!}
    {!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
</body>
</html>
