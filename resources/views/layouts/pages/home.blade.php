@extends('layouts.master')
@include('layouts.theme._header')
@section('content')
@include('layouts.model._information')
<hr>
<style type="text/css">
#portfolio .portfolio-item {
  margin: 0 0 15px;
  right: 0;
}
#portfolio .portfolio-item .portfolio-link {
  display: block;
  position: relative;
  max-width: 400px;
  margin: 0 auto;
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover {
  background: rgba(254, 209, 54, 0.9);
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: all ease 0.5s;
  -webkit-transition: all ease 0.5s;
  -moz-transition: all ease 0.5s;
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover:hover {
  opacity: 1;
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content {
  position: absolute;
  width: 100%;
  height: 20px;
  font-size: 20px;
  text-align: center;
  top: 50%;
  margin-top: -12px;
  color: white;
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content i {
  margin-top: -12px;
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h3,
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h4 {
  margin: 0;
}
#portfolio .portfolio-item .portfolio-caption {
  max-width: 400px;
  margin: 0 auto;
  background-color: white;
  text-align: center;
  padding: 25px;
}
#portfolio .portfolio-item .portfolio-caption h4 {
  text-transform: none;
  margin: 0;
}
#portfolio .portfolio-item .portfolio-caption p {
  font-family: "Droid Serif", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: italic;
  font-size: 16px;
  margin: 0;
}
#portfolio * {
  z-index: 2;
}
@media (min-width: 767px) {
  #portfolio .portfolio-item {
    margin: 0 0 30px;
  }
}

    .alert-message
{
    margin: 20px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}
.alert-message-success
{
    background-color: #F4FDF0;
    border-color: #3C763D;
}
.alert-message-success h4
{
    color: #3C763D;
}
.alert-message-danger
{
    background-color: #fdf7f7;
    border-color: #d9534f;
}
.alert-message-danger h4
{
    color: #d9534f;
}
.alert-message-warning
{
    background-color: #fcf8f2;
    border-color: #f0ad4e;
}
.alert-message-warning h4
{
    color: #f0ad4e;
}
.alert-message-info
{
    background-color: #f4f8fa;
    border-color: #5bc0de;
}
.alert-message-info h4
{
    color: #5bc0de;
}
.alert-message-default
{
    background-color: #EEE;
    border-color: #B4B4B4;
}
.alert-message-default h4
{
    color: #000;
}
.alert-message-notice
{
    background-color: #FCFCDD;
    border-color: #BDBD89;
}
.alert-message-notice h4
{
    color: #444;
}
/*####################################*/
</style>
<div class="container">

        <!-- Marketing Icons Section -->
     
            <div class="row spanish" >
            <div class="col-lg-12">
                <h1 class="page-header">
                    บริการของเรา
                </h1>
            </div>
            <div class="grid grid--effect-vega">
                    <a href="{{ url('executive_search')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/1.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title "><i class="fa fa-search " aria-hidden="true"></i> บริการสรรหาพนักงานประจำ</h3>

                          
                        </div>
                    </a>
                    <a href="{{ url('staff_outsourcing')}}" class="grid__item grid__item--c2">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/2.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-user-plus" aria-hidden="true"></i> บริการเอาท์ซอร์สพนักงาน</h3>
                          
                        </div>
                    </a>

                    <a href="{{ url('payrolling_service')}}" class="grid__item grid__item--c3">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/3.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-credit-card" aria-hidden="true"></i> บริการจัดทำเงินเดือน</h3>
                            
                        </div>
                    </a>
                      <a href="{{ url('inhouse_training')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/4.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-users" aria-hidden="true"></i> บริการจัดฝึกอบรม</h3>
                         
                        </div>
                    </a>
                      <a href="{{ url('accounting')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/5.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-calculator" aria-hidden="true"></i>  บริการจัดทำบัญชี</h3>
                          
                        </div>
                    </a>
                       <a href="{{ url('business_consulting')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/6.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-pie-chart " aria-hidden="true"></i>  บริการให้คำปรึกษา HR และธุรกิจ </h3>
                          
                        </div>
                    </a>

                </div>
                </div>
       <!-- ################### english#########################3 -->

<div class="row english" >
            <div class="col-lg-12">
                <h1 class="page-header">
                    Our Services
                </h1>
            </div>
            <div class="grid grid--effect-vega">
                    <a href="{{ url('executive_search')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/1.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-search" aria-hidden="true"></i> Recuitment Service</h3>
                          
                        </div>
                    </a>
                    <a href="{{ url('staff_outsourcing')}}" class="grid__item grid__item--c2">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/2.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-user-plus" aria-hidden="true"></i> Staff & Labor Outsourcing</h3>
                          
                        </div>
                    </a>

                    <a href="{{ url('payrolling_service')}}" class="grid__item grid__item--c3">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/3.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-credit-card" aria-hidden="true"></i> Payroll Outsourcing</h3>
                            
                        </div>
                    </a>
                      <a href="{{ url('inhouse_training')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/4.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-users" aria-hidden="true"></i> In-house Training</h3>
                         
                        </div>
                    </a>
                      <a href="{{ url('accounting')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/5.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-calculator" aria-hidden="true"></i>  Accounting Service</h3>
                          
                        </div>
                    </a>
                      <a href="{{ url('business_consulting')}}" class="grid__item grid__item--c1">
                        <div class="stack">
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__deco"></div>
                            <div class="stack__figure">
                                <img class="stack__img" src="panel/img/6.png" alt="Image"/>
                            </div>
                        </div>
                        <div class="grid__item-caption">
                            <h3 class="grid__item-title"><i class="fa fa-pie-chart " aria-hidden="true"></i>  HR & Business Consulting </h3>
                          
                        </div>
                    </a>

                </div>
                </div>
    
        <!-- /.row -->


        <!-- Portfolio Section -->
        <div class="row spanish">
            <div class="col-lg-12">
                <h2 class="page-header">พนักงานเอ้าท์ซอร์สของเรา</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/driver.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/messenger.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/callphone.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/scanfinger.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/dowork2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/dowork.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
        <!-- #########################english ############################-->
         <div class="row english">
            <div class="col-lg-12">
                <h2 class="page-header">Our Outsourced Staff</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/driver.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/messenger.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/callphone.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/scanfinger.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/dowork2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{url('staff_outsourcing')}}">
                    <img class="img-responsive img-portfolio img-hover" src="images/dowork.jpg" alt="">
                </a>
            </div>
        </div>
<hr>
      <div class="row">
          <div class="col-md-12 text-center ">
        <h1>
  <div style="color:rgb(66,165,245);" class="typewrite" data-period="2000" data-type='[ "BPIT Holdings Co,.Ltd", "Recuitment Search", "Staff & Labor Outsourcing", "Training" ,"Payroll Outsourcing","Bangkok : 02-434-3195-7","Pattaya : 038-416-975-7","Chonburi : 038-458-925-6"]'>
    <span class="wrap"></span>
</div>
</h1>
         </div>
      </div>
      <script type="text/javascript">
          //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid rgb(66,165,245)}";
        document.body.appendChild(css);
    };
      </script>
<hr>
        <!-- Features Section -->
        <div class="row">
        <section id="portfolio" class="bg-light-gray spanish">
            <div class="col-md-9">
              <div class="panel panel-success">
                        <div class="panel-heading ">
                        <i class="fa fa-bell fa-fw spanish"></i>    สาระน่ารู้
                        </div>
                           <div class="panel-body">
                            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.mol.go.th/employer/duty" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara1.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>สิทธินายจ้าง ลูกจ้าง</h4>
                     <!--    <p class="text-muted">Graphic Design</p> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.mol.go.th/employee/Welfare_workers" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara2.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>สวัสดิการแรงงาน</h4>
                    
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.oshthai.org/index.php?option=com_content&view=category&id=13&Itemid=205" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara3.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>โรคที่เกิดจากการทำงาน</h4>
                     
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.oshthai.org/index.php?option=com_content&view=article&id=562:-5-2560-23-2560-&catid=1:news-thai" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara4.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>พ.ร.บ. คุ้มครองแรงงาน 2560</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://ssolife.com/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara5.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>SSO Life</h4>
                              <p class="text-muted">โดย สำนักงานประกันสังคม</p>
                     
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://lb.mol.go.th/main.php?filename=index" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara6.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>บริการประชาชน</h4>
                           <p class="text-muted">โดย กระทรวงแรงงาน</p>
                       
                    </div>
                </div>
            </div>
                            </div>

              </div>
            
            </div>
            
            </section >
            <section id="portfolio" class="bg-light-gray english">
            <div class="col-md-9">
              <div class="panel panel-success">
                        <div class="panel-heading ">
                        <i class="fa fa-bell fa-fw spanish"></i>  NEWS & Knowledge
                        </div>
                           <div class="panel-body">
                            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.mol.go.th/employer/duty" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara1.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>สิทธินายจ้าง ลูกจ้าง</h4>
                     <!--    <p class="text-muted">Graphic Design</p> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.mol.go.th/employee/Welfare_workers" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara2.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>สวัสดิการแรงงาน</h4>
                    
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.oshthai.org/index.php?option=com_content&view=category&id=13&Itemid=205" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara3.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>โรคที่เกิดจากการทำงาน</h4>
                     
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.oshthai.org/index.php?option=com_content&view=article&id=562:-5-2560-23-2560-&catid=1:news-thai" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara4.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>พ.ร.บ. คุ้มครองแรงงาน 2560</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://ssolife.com/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara5.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>SSO Life</h4>
                              <p class="text-muted">โดย สำนักงานประกันสังคม</p>
                     
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://lb.mol.go.th/main.php?filename=index" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/sara/sara6.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>บริการประชาชน</h4>
                           <p class="text-muted">โดย กระทรวงแรงงาน</p>
                       
                    </div>
                </div>
            </div>
                            </div>

              </div>
            
            </div>
            
            </section >
            <div class="col-md-3 ">
             <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> เว็บไซต์
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="http://www.mol.go.th/anonymouse/link" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> เว็บไซต์หน่วยงานภาครัฐ
                                    </span>
                                </a>
                                <a href="http://www.mol.go.th/employee/news-1" class="list-group-item">
                                    <i class="fa fa-users fa-fw"></i> ตลาดนัดแรงงาน
                                    
                                    </span>
                                </a>
                                <a href="http://www.sso.go.th/wpr/hospital_search.jsp?cat=792&webId=0" class="list-group-item">
                                    <i class="fa fa-heartbeat fa-fw"></i> สถานพยาบาลประกันสังคม
                                  
                                    </span>
                                </a>
                                <a href="http://www.sso.go.th/wpr/sv39.jsp?cat=799&webId=0" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> ตรวจประกันสังคม
                                   
                                    </span>
                                </a>
                                <a href="http://www.sso.go.th/wpr/category.jsp?lang=th&cat=772" class="list-group-item">
                                    <i class="fa fa-check-square fa-fw"></i> สิทธิประโยชน์ประกันสังคม
                                    
                                    </span>
                                </a>
                                    <a href="http://www.sso.go.th/wpr/uploads/uploadImages/file/usermanual0360.pdf" class="list-group-item">
                                    <i class="fa fa-address-book fa-fw"></i> คู่มือประกันตน
                                  
                                    </span>
                                </a>
                                <a href="http://www.mol.go.th/anonymouse/laws" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> กฎหมายแรงงาน
                                    
                                    </span>
                                </a>
                                <a href="http://www.mol.go.th/employee/interesting_information/4131 " class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> อัตตราค่าจ้าง 2560
                     
                                    </span>
                                </a>
                            
                                
                                <a href="http://www.labour.go.th/th/index.php?option=com_glossary&Itemid=109" class="list-group-item">
                                    <i class="fa fa-language fa-fw"></i> คำศัพท์แรงงาน
                            
                                </a>
                            </div>
                            <!-- /.list-group -->
                           
                        </div>
                       
                        <!-- /.panel-body -->
                    </div>
          <div class="fb-page" data-href="https://www.facebook.com/BpitHolding/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/BpitHolding/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/BpitHolding/">BPIT Holdings</a></blockquote></div>
            </div>
        </div>

        <!-- /.row -->

        <hr style="border-color: red;">
       <div class="row" >
  
           <div class="col-md-12">
                <div class="panel panel-primary" style="height: auto;"     >
                        <div class="panel-heading">
                       
                     <i class="fa fa-thumb-tack" aria-hidden="true"></i>   ตำแหน่งงานว่าง
                
                        </div>
                        <div class="panel-body">
                    <ul class="event-list" id="spy2">
                    <li style="display: block;">
                    <div class="alert-message alert-message-danger">
                <h4>
                    Marketing Executive (ประจำ Garuda food)</h4>
                      <h4 style="color:#337ab7;"> จังหวัด : กรุงเทพมหานคร   เขต : คลองเตย, วัฒนา</h4>
                     <h4 style="color:green;"> อัตรา : 1    เงินเดือน : 20,000 - 23,000 </h4>
                <p>
                   เดินทางตรวจเยียม ให้คำแนะนำเอเย่นส์ในต่างจังหวัด และงานอื่นๆ ตามที่ได้รับมอบหมาย - หัวหน้างานเป็นคนอินโดเนียเซ๊ย (ผู้หญิง) - มีเบี้ยขยัน 1,500 บาท - มีโิบนัส 1 เดือน - เงินเดือน 20,000 บาท / หลังผ่านทดลองงานปรับเป็น 23,000 บาท + เบี้ยขยัน</strong>.</p>
                 
            </div>
                        
                    </li>
                           <li style="display: block;">
                    <div class="alert-message alert-message-danger">
                <h4>
                   พนักงานขับรถส่วนกลาง ( ประจำอาคารชาญอิสสระทาวเวอร์ 2) สัญญาจ้าง 5 เดือน)</h4>
                      <h4 style="color:#337ab7;"> จังหวัด กรุงเทพมหานคร   เขต : ลาดพร้าว, ห้วยขวาง, วังทองหลาง</h4>
                     <h4 style="color:green;"> อัตรา : 1   เงินเดือน : 10,500 + </h4>
                <p>
                   ขับรถไปตามสถานที่ต่างๆ ตามที่ได้รับมอบหมาย **รายได้อื่นๆ นอกเหนือจากเงินเดือน: โอที วันทำงาน : จันทร์ – ศุกร์ เวลา 08.00-17.00 น. หยุด ส-อ และวันหยุดนักขัตฤกษ์ สัญญาจ้าง 5 เดือน </strong>.</p>
                 
            </div>
                        
                    </li>
                          <li style="display: block;">
                    <div class="alert-message alert-message-danger">
                <h4>
                    เจ้าหน้าที่ CRM</h4>
                      <h4 style="color:#337ab7;"> จังหวัด : กรุงเทพมหานคร   เขต : คลองเตย, วัฒนา</h4>
                     <h4 style="color:green;"> อัตรา : 1    เงินเดือน : 20,000 - 23,000 </h4>
                <p>
                   โทรติดตามผลหลังการซ่อมรถของลุกค้าที่นำรถมาซ่อมที่ศูนย์บริการอีซูซุ -นัดหมายการซ่อม -รับเรื่องร้องเรียน ทำงานจันทร์ - เสาร์ เวลา 8.00-17.00 หยุดทุกวันอาทิตย์และวันหยุดนักขัติฤกษ์ สวิสดิการ -ชุดพนักงาน -สิทธิลาพักร้อน -โบนัส -เบี้ยขยัน</strong>.</p>
                 
            </div>
                        
                    </li>
                          <li style="display: block;">
                    <div class="alert-message alert-message-danger">
                <h4>
                    เจ้าหน้าที่ธุรการ (ทำงานที่ตรีเพชรอีซูซุ) ด่วนมาก</h4>
                      <h4 style="color:#337ab7;"> จังหวัด กรุงเทพมหานคร   เขต : จตุจักร</h4>
                     <h4 style="color:green;">อัตรา : 10   เงินเดือน : 11000 </h4>
                <p>
                    1.คีย์ข้อมูลลงระบบ 2.ติดต่อประสานงานให้กับฝ่าย 3.ดูแลเรื่องเอกสาร 4.หน้าที่อื่นๆ ตามที่ได้รับมอบหมาย ทำงานจันทร์ - ศุกร์ เวลา 8.30 - 17.00 น. หยุดเสาร์ - อาทิตย์และนักขัตฤกษ์ สวัสดิการ - เบี้ยขยัน - ชุดพนักงาน - โบนัสประจำปี - ค่าอาหาร </strong>.</p>
                 
            </div>
                        
                    </li>
                          <li style="display: block;">
                    <div class="alert-message alert-message-danger">
                <h4>
                    Marketing Executive (ประจำ Garuda food)</h4>
                      <h4 style="color:#337ab7;"> จังหวัด : กรุงเทพมหานคร   เขต : คลองเตย, วัฒนา</h4>
                     <h4 style="color:green;"> อัตรา : 1    เงินเดือน : 20,000 - 23,000 </h4>
                <p>
                   เดินทางตรวจเยียม ให้คำแนะนำเอเย่นส์ในต่างจังหวัด และงานอื่นๆ ตามที่ได้รับมอบหมาย - หัวหน้างานเป็นคนอินโดเนียเซ๊ย (ผู้หญิง) - มีเบี้ยขยัน 1,500 บาท - มีโิบนัส 1 เดือน - เงินเดือน 20,000 บาท / หลังผ่านทดลองงานปรับเป็น 23,000 บาท + เบี้ยขยัน</strong>.</p>
                 
            </div>
                        
                    </li>

                </ul>
   
    
                    
                          
                        </div>
                </div>              
           </div>

       </div>

        <hr>
        


        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src="panel/js/anime.min.js"></script>
        <script src="panel/js/main.js"></script>
        <script>
        (function() {
            [].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function(stackEl) {
                new VegaFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-castor > .grid__item')).forEach(function(stackEl) {
                new CastorFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function(stackEl) {
                new HamalFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-polaris > .grid__item')).forEach(function(stackEl) {
                new PolarisFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-alphard > .grid__item')).forEach(function(stackEl) {
                new AlphardFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-altair > .grid__item')).forEach(function(stackEl) {
                new AltairFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-rigel > .grid__item')).forEach(function(stackEl) {
                new RigelFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-canopus > .grid__item')).forEach(function(stackEl) {
                new CanopusFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-pollux > .grid__item')).forEach(function(stackEl) {
                new PolluxFx(stackEl);
            });
            [].slice.call(document.querySelectorAll('.grid--effect-deneb > .grid__item')).forEach(function(stackEl) {
                new DenebFx(stackEl);
            });
        })();

        //////////////////////////////////////////////////////////////////////////////////////////////
                $(document).ready(function() {
    
    $('ul#spy2').simpleSpy2(4, 4000);
});

(function($) {

    
$.fn.simpleSpy2 = function(limit, interval) {
    limit    = limit || 4;
    interval = interval || 4000;
    
    return this.each(function() {
        // 1. setup
            // capture a cache of all the Interesting title s
            // chomp the list down to limit li elements
        var $list       = $(this),
            items       = [], // uninitialised
            currentItem = limit,
            total       = 0, // initialise later on
            start       = 0,//when the effect first starts
            startdelay  = 4000,
            height      = $list.find('> li:first').height(),
            theMargin   = $list.find('> li:first').css('marginTop') + $list.find('> li:first').css('marginBottom');
            
        // capture the cache
        $list.find('> li').each(function() {
            items.push('<li style="display:block;">' + $(this).html() + '</li>');
        });
        
        total = items.length;

        $list.find('> li').filter(':gt(' + (limit - 1) + ')').remove();

        // 2. effect        
        function spy() {
            // insert a new item with opacity and height of zero
            var $insert = $(items[currentItem]).hide().prependTo($list);
                        
            // fade the LAST item out
            $list.find('> li:last').animate({opacity:0}, 1000, function() {
                // increase the height of the NEW first item
                 $insert.slideDown(1000);
                 $(this).remove();
            });
            
            currentItem++;
            if (currentItem >= total) {
                currentItem = 0;
            }
            
            setTimeout(spy, interval)
        }
        
        if (start < 1) {
               setTimeout(spy,startdelay);
                start++;
            } else {
                spy();
            }
        
    });
};
    
})(jQuery);
        </script>
<link rel="stylesheet" type="text/css" href="panel/css/demo.css" />
 <!--  <script type="text/javascript">
$(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>  -->
@endsection

