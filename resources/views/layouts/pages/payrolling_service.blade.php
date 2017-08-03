@extends('layouts.master')
@section('content')
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">บริการจัดทำเงินเดือน
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">หน้าแรก</a>
                    </li>
                    <li class="active">บริการจัดทำเงินเดือน</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fa fa-building" aria-hidden="true" style="color:grey;" ></i> : บริษัท บีพีไอที โฮลดิ้งส์ จำกัด (BPIT)</h2>
                <p>รับจัดทำเงินเดือนให้กับบริษัทลูกค้าด้วยความถูกต้อง แม่นยำ และเที่ยงตรง ซึ่งครอบคลุม การจัดทำเงินเดือน (จ่ายเงินให้พนักงานในนาม BPIT เสมือนพนักงานเป็นของเรา หรือจ่ายเงินในนามของลูกค้า)/ จัดทำประกันสังคม/ ภาษีเงินได้ และสวัสดิการต่างๆ นอกจากนั้นเรายังมีบริการจัดทำรายงานต่างๆ ที่เกี่ยวข้องกับเรื่องเงินเดือนให้ลูกค้าตามที่ลูกค้าต้องการอีกด้วย</p>
              
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/account/ac.png" alt="">
            </div>
        </div>
<hr>
   <div class="row">
            <div class="col-md-6">
                 <h3><i class="fa fa-check" style="color:green;" aria-hidden="true"></i> : จุดเด่นของเรา</h3>
                
                <p>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> : <strong>ค่าบริการที่ถูกกว่า </strong> แต่คุณภาพมาตรฐานระดับสากล <br>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> : <strong>ลดต้นทุนในการดำเนินงาน </strong>(เช่น ไม่ต้องจ้างพนักงานทำเงินเดือนเองซึ่งค่าจ้างต้องปรับเพิ่มทุกปี/ ไม่ต้องลงทุนซื้อโปรแกรมเงินเดือน เป็นต้น)
                    <br>
                     <i class="fa fa-check-square-o" aria-hidden="true"></i> : 
                        <strong> กระจายภาระงานตามข้อกฎหมายที่กำหนดให้บริษัทผู้ว่าจ้างต้องปฎิบัติตาม </strong>ที่นับวันจะซับซ้อนมากขึ้น
                    <br>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> : 
                        <strong> เรามีระบบป้องกันข้อมูลสูญหายให้ลูกค้าด้วยระบบการเก็บรักษาข้อมูลสำรองที่ดีเยี่ยม </strong>
                      <br>
                   <i class="fa fa-check-square-o" aria-hidden="true"></i> : 
                      <strong>  เรามีบริการทำรายงานต่างๆ </strong>ที่เกี่ยวกับการจ่ายเงินเดือนเพื่อให้ลูกค้าสะดวกในการบริหารงาน
                      <br>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> : 
                       <strong> การจัดทำเงินเดือนเป็นงานประจำที่ใช้ทักษะไม่สูง </strong>หากท่านยกภาระงานนี้ให้เราดำเนินการแทน ฝ่ายทรัพยากรบุคคลของท่านจะมีเวลาไปทำงานที่สำคัญกว่าที่จะส่งผลให้ธุรกิจดีขึ้นได้  
                     <br>
                    </p>
              
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/account/ac2.png" alt="">
            </div>
        </div>
        
        <!-- /.row -->

        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">ขั้นตอนในการใช้บริการจัดทำเงินเดือนของเรา มี 5 ขั้นตอน ดังนี้</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-check-square"></i> ขั้นตอนที่ 1</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-check-square"></i> : ขั้นตอนที่ 2</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-check-square"></i> : ขั้นตอนที่ 3</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-check-square"></i> : ขั้นตอนที่ 4</a>
                    </li>
                      <li class=""><a href="#service-five" data-toggle="tab"><i class="fa fa-check-square"></i> : ขั้นตอนที่ 5</a>
                    </li>
                    <li class=""><a href="#service-six" data-toggle="tab"><i class="fa fa-mobile fa-2x"></i> : รายละเอียดเพิ่มเติม</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4> ทำสัญญาว่าจ้าง</h4>
                        <p>
                            เจรจารายละเอียดของงานและเงื่อนไขต่างๆ ที่ลูกค้าต้องการให้เราทำให้ เพื่อกำหนดเป็นรายละเอียดในสัญญาบริการ
                        </p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>การสำรวจรายละเอียดเบื้องต้นของลูกค้า</h4>
                        <p>เพื่อให้มั่นใจว่าเราเข้าใจความต้องการที่แท้จริงของลูกค้าได้อย่างไม่ผิดพลาด (เช่น รายละเอียดของธุรกิจลูกค้า/ รวบรวมรายละเอียดของความต้องการต่างๆ/ ขั้นตอนในการทำเงินเดือนปัจจุบัน/ รายงานต่างๆ ที่ทำอยู ณ ปัจจุบัน/ ปัญหาของงานทำเงินเดือนที่มี/ ระดับความคาดหวังของลูกค้าจากการใช้บริการทำเงินเดือนของเรา)</p>
                        
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>การกำหนดวิธีการทำงาน</h4>
                        <p>หลังจากได้ข้อมูลต่างๆ จากลูกค้าแล้ว เราจะทำการศึกษาเพื่อกำหนดวิธีการและขั้นตอนการทำเงินเดือนที่เหมาะสมกับลูกค้า และอาจจะมีข้อแนะนำต่างๆ ที่จะช่วยให้ลูกค้าลดค่าใช้จ่ายในการทำงานในส่วนนี้ด้วย</p>
                       
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>เริ่มให้บริการทำเงินเดือน</h4>
                        <p> จากประสบการณ์ของเรา เราสามารถจะทำให้การถ่ายโอนงานทำเงินเดือนและสวัสดิการต่างๆ จากพนักงานของลูกค้ามาให้พนักงานของ BPIT ดำเนินการแทนได้อย่างราบรื่น แม้จะมีปัญหาบ้างหากรายละเอียดมาก แต่ก็จะเป็นเรื่อง เล็กๆ น้อยๆ เท่านั้น</p>
                       
                    </div>
                     <div class="tab-pane fade" id="service-five">
                        <h4>รักษามาตรฐานการบริการ</h4>
                        <p>ลูกค้าสามารถที่จะติดต่อตรงกับหัวหน้าทีมทำเงินเดือนของเราได้ตลอดเวลา เพื่อให้สามารถแก้ไขปัญหาต่างๆ ที่อาจจะเกิดขึ้นได้ย่างรวดเร็ว  </p>
                       
                    </div>
                    <div class="tab-pane fade" id="service-six">
                        <h4>กรุงเทพและปริมณฑล; กรุณาติดต่อ </h4>
                        <p>คุณโสภิดา – มือถือ (081) 510 – 8853 สำนักงานโทร (02) 434 3195 – 7 E-mail; sopida_s@bpit.co.th </p>
                        <p>
                            คุณอรอุมา – มือถือ (087) 080 – 9101 สำนักงานโทร (038) 416 975 – 7 E-mail; on-uma_s@bpit.co.th
                        </p>
                       
                    </div>
                </div>

            </div>
        </div>

        <hr>

@endsection

