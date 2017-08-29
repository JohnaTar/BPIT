@extends('layouts.master')
@section('content')
<style type="text/css">*{
  margin:0;
  padding:0;
}


/*
Width of image : 500;
Width of hovered image: 500
Width of unhovered image: 25x;
Width of container : 500 + 50*4 = 700px;
Default 700/5 : 140px;
*/

.accordian{
  width: 705px;
  height: 374px;
  overflow:hidden;
  
  margin: 100px auto;
  -webkit-box-shadow: 0 8px 6px -6px black;
  -moz-box-shadow: 0 8px 6px -6px black;
  box-shadow: 0px 8px 6px -6px black;
}
.accordian ul{
  
}
.accordian li{
  position: relative;
  display:block;
  width:140px;
  float: left;
  
  border-left: 1px solid #888;
  -webkit-box-shadow: 0 0 25px 10px rgba(0,0,0,0.5);
  -moz-box-shadow: 0 0 25px 10px rgba(0,0,0,0.5);
  
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}


.accordian ul:hover li{
  width: 50px;
}

.accordian ul li:hover{
  width:500px;
}

.accordian li img{
  display: block;
}

.image_title{
  background: rgba(0,0,0,0.5);
  position:absolute;
  left:0;
  bottom:0;
  width:500px;
}

.image_title a{
  display: block;
  color: #fff;
  text-decoration: none;
  padding:20px;
  font-size:16px;
}
</style>
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row spanish">
            <div class="col-lg-12">
                <h1 class="page-header">บริการเอาท์ซอร์สพนักงานและแรงงาน
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">หน้าแรก</a>
                    </li>
                    <li class="active">บริการเอาท์ซอร์สพนักงานและแรงงาน</li>
                </ol>
            </div>
        </div>
        <div class="row english">
            <div class="col-lg-12">
                <h1 class="page-header">Staff & Labor Outsourcing
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">Home</a>
                    </li>
                    <li class="active">Staff & Labor Outsourcing</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
             <div class="col-md-6">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                         <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="images/outsource/slide/o1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o3.png" alt="">
                        </div>
                          <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o4.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o5.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o6.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/outsource/slide/o7.png" alt="">
                        </div>
                    </div>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                
            </div>
            <div class="col-md-6 english">
                <h2><i class="fa fa-building" aria-hidden="true" style="color:grey;" ></i> : <em>BPIT</em> Holdings Co.,Ltd (BPIT)</h2>
                <p> <strong><em>BPIT</em></strong> is a boutique staff supply company customized the needs of each individual client; BPIT has deployed more than 1,000 employees to both for local and international enterprises. An irreversible tendency of employment in the around the world is Subcontracting or Outsourcing in administration of personnel; this means that more and more organizations give outside expert company to take over some parts of their personnel administrative tasks such as recruiting, dismissals, payroll processing, social security, personnel appraisal etc. 
                </p>
              
            </div>
             <div class="col-md-6 spanish">
                <h2><i class="fa fa-building" aria-hidden="true" style="color:grey;" ></i> : บริษัท บีพีไอที โฮลดิ้งส์ จำกัด <em> (BPIT) </em></h2>
                <p> ให้บริการสรรหาพนักงานทุกระดับตั้งแต่พนักงานระดับปฏิบัติการ-ผู้บริหาร โดยเราสามารถดำเนินการต่างๆ ตามที่ลูกค้าแต่ละรายต้องการได้ เพราะเรามีปรัชญายึดหลัก <B>"ลูกค้าเป็นศูนย์กลาง"</B>
                </p>
                <p>เรามีพนักงานมืออาชีพที่คอยช่วยลูกค้าในการกำหนดคุณสมบัติที่ชัดเจน-เหมาะสมกับงาน และด้วยประสพการณ์ตรงยาวนานในวิชาชีพ พนักงานของเราจะเรียนรู้และเข้าใจความต้องการของลูกค้า รวมถึงเรื่องต่างๆ เกี่ยวกับธุรกิจของลูกค้าได้อย่างรวดเร็ว </p>
                <p>ดังนั้น หากท่านใช้บริการของ <strong><em>BPIT</em></strong>  แล้วจงมั่นใจว่า นอกจากท่านจะได้ผู้สมัครที่มีทักษะในงานตรงตามต้องการแล้ว เรายังมองไปถึงการคัดเลือกเฉพาะคนที่เห็นว่าเข้ากับองค์กรของท่านได้อีกด้วย</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active "><a href="#service-1" data-toggle="tab"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> : <dir class="english">Why us?</dir>
                    <div class="spanish">จุดเด่นของเรา</div></a>
                    </li>

                    <li class=""><a href="#service-2" data-toggle="tab"><i class="fa fa-play" aria-hidden="true"></i> : <div class="spanish"> ตำแหน่งงานที่เราให้บริการเอาท์ซอร์ส</div><div class="english"> Our Human Resources </div></a>
                    </li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-1">
                        <br>
                        <div class="spanish">
                        <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : พนักงานของเรามีประสิทธิภาพสูง เพราะ <strong> <em>BPIT</em> </strong>ดูแลพนักงานในฐานะเป็นหุ้นส่วนทางธุรกิจ (ไม่ใช่มองว่าเป็นลูกจ้าง) เพราะเราต้องการให้พนักงานมีความสุขเพื่อที่จะได้ทุ่มเทการทำงานให้ลูกค้า</p>
                        <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : เราสรรหาพนักงานให้ลูกค้าได้อย่างรวดเร็ว</p>
                         <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : <B>ค่าบริการที่ถูกกว่า</B> แต่คุณภาพมาตรฐานระดับสากล</p>
                          <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : เราช่วยลูกค้าลดความยุ่งยากในการสรรหาพนักงานระดับล่างและยังสมารถลดต้นทุนในการบริหารคน</p>
                           <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : เราช่วยลูกค้าลดภาระความเสี่ยงทางด้านกฎหมายเกี่ยวกับแรงงาน ทั้งนี้เพราะพนักงานเป็นของเรา และนอกจากนั้นเรายังยินดีดำเนินการต่างๆ ด้านกฎหมายแทนลูกค้าฟรีหากเกิดกรณีฟ้องร้องต่างๆ </p>
                            <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : ช่วยลดระดับชั้นพนักงาน และลดจำนวนพนักงาน ทำให้ลูกค้าบริหารงานง่ายขึ้น</p>
                             <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : ลูกค้ามีความยืดหยุ่นในการเพิ่มหรือลดจำนวนพนักงานตามที่ต้องการ</p>
                              <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : ลูกค้าไม่มีภาระจ่ายส่วนแบ่งกำไรแก่พนักงานเอาท์ซอร์ส (กรณีลูกค้ามีระบบ Profit Sharing)</p>
                               <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : ลูกค้าลดภาระ ไม่ต้องจ่ายค่าสวัสดิการสูงๆ แก่พนักงานที่จบใหม่ ประสบการณ์น้อย (เอางบไปใช้รักษาคนที่มีทักษะ-ความรู้สูงๆ ให้ทำงานอยู่กับองค์กรนานๆ)</p>
                               <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : ลูกค้ามีเวลาไปมุ่งทำเฉพาะกิจกรรมที่สำคัญๆ ที่จะทำให้ธุรกิจดีขึ้น (ยกภาระงานประจำให้เราทำแทน)</p>
                               </div>
                               <div class="english">
                                 <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : More productivity of our personnel; <strong><em> BPIT </em></strong>treats employees as business its partner which make them happy and willing to work for clients</p>
                        <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Quick Response in recruiting</p>
                         <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : <B>Cheaper Fee</B> while maintaining international standard processes and quality</p>
                          <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Savings in massive recruitment and personnel administrative costs</p>
                           <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Eliminate legal and labor responsibilities </p>
                            <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Decrease your staff levels and your staff headcount </p>
                             <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Flexible to increase or decrease personnel</p>
                              <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Avoid profit-sharing</p>
                               <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Avoid high costs of benefits for green horn employees</p>
                               <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Available time to concentrate on your core activities which impact direct to your business results</p>
                               </div>
                    </div>
                <div class="tab-pane fade" id="service-2">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="accordian">
  <ul>
    <li>
      <div class="image_title">
   <a href="#">Our Outsourced Staff</a>
      </div>
      <a href="#">
     <img  src="images/outsource/show/s01.jpg">
            </a>
    </li>
       <li>
      <div class="image_title">
        <a href="#">Our Outsourced Staff</a>
      </div>
      <a href="#">
     <img  src="images/outsource/show/s02.jpg">
            </a>
    </li>
          <li>
      <div class="image_title">
        <a href="#">Our Outsourced Staff</a>
      </div>
      <a href="#">
     <img  src="images/outsource/show/s03.jpg">
            </a>
    </li>
             <li>
      <div class="image_title">
        <a href="#">Our Outsourced Staff</a>
      </div>
      <a href="#">
     <img  src="images/outsource/show/s04.jpg">

            </a>
    </li>
                <li>
      <div class="image_title">
        <a href="#">Our Outsourced Staff</a>
      </div>
      <a href="#">
     <img  src="images/outsource/show/s05.jpg">
            </a>
    </li>
  </ul>
</div>
                        <div class="row spanish">
                            <div class="col-md-4" style="border-left: thick solid #ffbb33;">
                            <p>
                                 <i class="fa fa-user-o" style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานคีย์ข้อมูล <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานบัญชี <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานบุคคล <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานธุรการ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : เลขานุการ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ล่าม (ทุกภาษา) 
                        </p>
                            </div>
                            <div class="col-md-4" style="border-left: thick solid #00C851;">
                                <p><i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ประชาสัมพันธ์ <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานรับโทรศัพท์ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานแนะนำสินค้า (PC) <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานขาย (Sales) <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พริตตี้ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : เจ้าหน้าที่ประจำคลังสินค้า</p>
                            </div>
                            <div class="col-md-4" style="border-left: thick solid #33b5e5;">
                                <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : คนงานประจำคลังสินค้า <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ช่างเทคนิค/ ช่างซ่อมบำรุง <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานขับรถ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานรับ-ส่งเอกสาร <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : คนงานประจำโรงงานผลิตสินค้า 
                            </div>

                        </div>
                        <div class="row english">
                            <div class="col-md-4" style="border-left: thick solid #ffbb33;">
                            <p>
                        <i class="fa fa-user-o" style="color: #5bc0de;" aria-hidden="true"></i> : Data Entry Staff <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Accounting Staff <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Personnel Staff <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : General Administrative Staff <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Secretary <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Interpreter <br>
                       
                        </p>
                            </div>
                            <div class="col-md-4" style="border-left: thick solid #00C851;">
                                <p>  <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Receptionist <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Telephone Operator <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : PC <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Salesman <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Pretty Girl <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Warehouse Staff <br>
                                  
                                </p>
                            </div>
                            <div class="col-md-4" style="border-left: thick solid #33b5e5;">
                          <p>
                            <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Warehouse operator <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Technician <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Driver <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Messenger <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : Labor Workforce <br>

                          </p>
                            </div>

                        </div>

                       </div>       
                    </div>                   
                </div>
                        <br>
                        
                        
                    </div>
                    
                </div>

            </div>
        </div>
         
        <!-- /.row -->

        <!-- Team Members -->
        
        <!-- /.row -->

        <hr>

@endsection

