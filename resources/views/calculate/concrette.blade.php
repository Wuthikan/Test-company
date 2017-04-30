@extends('layouts.main')

@section('content')
<section id ="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">

        <hr class="bottom-line">
        <h2>คอนกรีทผสม</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
      </div>
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>


        <div class="col-md-6 col-sm-6 col-xs-12 left">

          <img src="mentor/img/course01.jpg" class="img-responsive">
        </div>
          <div class="col-md-6 col-sm-6 col-xs-12 right">
          <form  role="form" class="contactForm form-horizontal">
          <br>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">ยาว (เมตร)</label>
              <div class="col-sm-9">
              <input type="text" name="long" class="form-control form" id="long" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            </div>
                <div class="validation"></div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">กว้าง (เมตร)</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="width" id="width" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
              </div>
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">หนา (มิลเมตร)</label>
                  <div class="col-sm-9">
                <input type="text" class="form-control" name="thick" id="thick" placeholder="1 ม. = 1000 มิลเมตร " data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              </div>
                <div class="validation"></div>
            </div>

            <div class="header-section text-right">
              <button type="button" id="submit" name="submit" class="form contact-form-button light-form-button oswald light" onclick="Calculate()">คำนวณความต้องการ</button>
          </div>
                </form>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 right">
          <form action="" method="post" role="form" class="contactForm form-horizontal">
          <br>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-5 control-label">คอนกรีต น้ำหนัก (ตัน)</label>
              <div class="col-sm-7">
              <input type="text" name="result" class="form-control form" id="result1" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            </div>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">โม่เล็ก จำนวน (คัน)</label>
                  <div class="col-sm-7">
                <input type="text" class="form-control" name="result3" id="result3" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              </div>
                <div class="validation"></div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-5 control-label">โม่ใหญ่ จำนวน (คัน)</label>
                  <div class="col-sm-7">
                <input type="text" class="form-control" name="result4" id="result4" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              </div>
                <div class="validation"></div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-5 control-label">คอนกรีต ปริมาณ (คิว)</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="result2" id="result2" placeholder="" data-rule="email" data-msg="Please enter a valid email" />
              </div>
                <div class="validation"></div>
            </div>
            <div class="header-section text-right">
              <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">สั่งซื้อ</button>
          </div>
                </form>
          </div>


<script>


function Calculate()
{
  var resources = document.getElementById('long').value;
  var minutes = document.getElementById('width').value;
  var thick = document.getElementById('thick').value;
  var permin = parseFloat(resources) / 60;
  document.getElementById('result1').value=parseFloat(permin) * parseFloat(minutes)* parseFloat(thick);
  document.getElementById('result2').value=parseFloat(permin) * parseFloat(minutes)* parseFloat(thick);
  document.getElementById('result3').value=parseFloat(permin) * parseFloat(minutes)* parseFloat(thick);
  document.getElementById('result4').value=parseFloat(permin) * parseFloat(minutes)* parseFloat(thick);

  document.form1.submit();
}
</script>
    </div>
  </div>
</section>
@endsection
