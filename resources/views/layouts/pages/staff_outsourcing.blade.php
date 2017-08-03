@extends('layouts.master')
@section('content')
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
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
            <div class="col-md-6">
                <h2><i class="fa fa-building" aria-hidden="true" style="color:grey;" ></i> : บริษัท บีพีไอที โฮลดิ้งส์ จำกัด (BPIT)</h2>
                <p> ให้บริการสรรหาพนักงานทุกระดับตั้งแต่พนักงานระดับปฏิบัติการ-ผู้บริหาร โดยเราสามารถดำเนินการต่างๆ ตามที่ลูกค้าแต่ละรายต้องการได้ เพราะเรามีปรัชญายึดหลัก <B>"ลูกค้าเป็นศูนย์กลาง"</B>
                </p>
                <p>เรามีพนักงานมืออาชีพที่คอยช่วยลูกค้าในการกำหนดคุณสมบัติที่ชัดเจน-เหมาะสมกับงาน และด้วยประสพการณ์ตรงยาวนานในวิชาชีพ พนักงานของเราจะเรียนรู้และเข้าใจความต้องการของลูกค้า รวมถึงเรื่องต่างๆ เกี่ยวกับธุรกิจของลูกค้าได้อย่างรวดเร็ว </p>
                <p>ดังนั้น หากท่านใช้บริการของ BPIT แล้วจงมั่นใจว่า นอกจากท่านจะได้ผู้สมัครที่มีทักษะในงานตรงตามต้องการแล้ว เรายังมองไปถึงการคัดเลือกเฉพาะคนที่เห็นว่าเข้ากับองค์กรของท่านได้อีกด้วย</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> : จุดเด่นของเรา</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-play" aria-hidden="true"></i> : ตำแหน่งงานที่เราให้บริการเอาท์ซอร์ส</a>
                    </li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <br>

                        <p><i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : พนักงานของเรามีประสิทธิภาพสูง เพราะ BPIT ดูแลพนักงานในฐานะเป็นหุ้นส่วนทางธุรกิจ (ไม่ใช่มองว่าเป็นลูกจ้าง) เพราะเราต้องการให้พนักงานมีความสุขเพื่อที่จะได้ทุ่มเทการทำงานให้ลูกค้า</p>
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
                    <div class="tab-pane fade" id="service-two">
                        <!-- <h4>Service Two</h4> -->
                        <br>
                        <p>
                        <i class="fa fa-user-o" style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานคีย์ข้อมูล <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานบัญชี <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานบุคคล <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานธุรการ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : เลขานุการ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ล่าม (ทุกภาษา) <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ประชาสัมพันธ์ <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานรับโทรศัพท์ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานแนะนำสินค้า (PC) <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานขาย (Sales) <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พริตตี้ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : เจ้าหน้าที่ประจำคลังสินค้า <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : คนงานประจำคลังสินค้า <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : ช่างเทคนิค/ ช่างซ่อมบำรุง <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานขับรถ <br>
                        <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : พนักงานรับ-ส่งเอกสาร <br>
                         <i class="fa fa-user-o"  style="color: #5bc0de;" aria-hidden="true"></i> : คนงานประจำโรงงานผลิตสินค้า <br>

                        </p>
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        
        <!-- /.row -->

        <hr>

@endsection

