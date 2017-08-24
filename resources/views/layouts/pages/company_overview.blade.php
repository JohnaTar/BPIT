@extends('layouts.master')
@section('content')
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row spanish">
            <div class="col-lg-12">
                <h1 class="page-header">ประวัติบริษัท
                    <small>บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">หน้าแรก</a>
                    </li>
                    <li class="active">ประวัติบริษัท</li>
                </ol>
            </div>
        </div>

        <!-- ######################english  ###############################-->
        <div class="row english">
            <div class="col-lg-12">
                <h1 class="page-header">Company Overview
                    <small>BPIT Holdings Co.,Ltd</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">Home</a>
                    </li>
                    <li class="active">Conpany Overview</li>
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
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="images/companny/h2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/companny/h1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/companny/h3.jpg" alt="">
                        </div>
                          <div class="item">
                            <img class="img-responsive" src="images/service/slide/s4.png" alt="">
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
                <h2>BPIT Holdings Co.,Ltd</h2>
                <p>BPIT  was founded on May 1, 1999; we are a full services firm in HR Management customized to meet the needs of each individual client. Our professional team uses their in-depth knowledge of a wide range of industries to deliver the services of;</p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Recuitment Search
                </p>
                 <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Staff & Labor Outsourcing
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Payroll Outsourcing
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : In-House Training
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : HR & Business Consluting
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : Accounting Service
                </p>
            </div>
             <div class="col-md-6 spanish">
                <h2>
บริษัท บีพีไอที โฮลดิ้งส์ จำกัด (BPIT)</h2>
                <p>ก่อตั้งขึ้นเมื่อวันที่ 1 พฤษภาคม 2542 โดยอาจารย์รุ่งนิกร สุมงคล ซึ่งในระยะแรก บริษัทฯ เน้นให้บริการเฉพาะงานฝึกอบรมเท่านั้น ต่อมาจึงได้ขยายธุรกิจ เพิ่มบริการอีกหลายด้าน</p>
                <p><strong> BPIT </strong>เป็นบริษัทที่ให้บริการงานด้าน HR แบบครบวงจรด้วยทีมบุคลากรมืออาชีพที่ชำนาญเฉพาะด้าน จากการที่เรามีบริการงาน HR ครบทุกด้านทำให้เราสามารถตอบสนองความต้องการของลูกค้าทุกรายได้ ซึ่งบริการของเรามีีดังนี้</p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการสรรหาพนักงานประจำ (Recruitment)
                </p>
                 <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการเอ้าซอร์สพนักงานและแรงงานในโรงงาน
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการจัดทำเงินเดือน
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการจัดฝึกอบรมภายในองค์กร (In-house Training)
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการให้คำปรึกษาด้านการบริหารงานบุคคลและธุรกิจ
                </p>
                <p>
                    <i class="fa fa-check-square-o" style="color:green;" aria-hidden="true"></i> : บริการจัดทำบัญชี
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row english" >
            <hr>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Mission</h4>
                    </div>
                    <div class="panel-body">
                        <p> <strong>BPIT   </strong> is experiencing rapid growth due to the acceptance of our service offerings in the market. As of the latest update of our client database, we serve >300 organizations in Thailand and we aim to expand our operation to Asian Region soon.</p>
                        <p>  One of the reasons for our rapid growth is we are the best to offer services with  <strong>  <U>fast-cheap-accuracy and easy </U></strong> n an entire changing world. Let us to give you a proposal showing a comparison of your current expenses VS the fees for one service of <strong>BPIT Holdings’service offering, it is likely you will see we offer more valuable services at no additional cost.

</strong>For any further information, you can contact our professional teams</p>
                     
                    </div>
                </div>
            </div>
           
           
        </div>

                <div class="row spanish" >
            <hr>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> พันธกิจ</h4>
                    </div>
                    <div class="panel-body">
                        <p> <strong>บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</strong> นับเป็นบริษัทที่เติบโตรวดเร็วมากแห่งหนึ่ง ซึ่งเป็นผลจากการยอมรับในคุณภาพบริการ ทำให้ปัจจุบันมีลูกค้าในไทยใช้บริการของเรามากกว่า 300 องค์กร มีรายได้มากกว่า 200 ล้านบาทต่อปี และเรามีแผนที่จะขยายงานไปให้บริการในภูมิภาคเอเชียตะวันออกเฉียงใต้ในไม่ช้า เพื่อสร้างความภาคภูมิใจที่อุตสาหกรรมบริการของไทยสามารถก้าวไกลไปต่างประเทศได้</p>
                        <p>  ทั้งนี้ เหตุผลสำคัญที่ทำให้เราเติบโตได้รวดเร็ว ก็เพราะ 
                        <strong>BPIT</strong>  <U> ให้บริการลูกค้าทุกรายด้วยความรวดเร็ว-ค่าบริการที่ถูก-คุณภาพบริการที่ดี และสะดวกในการเรียกใช้งาน</U> ท่านสามารถติดต่อให้เราเสนอราคาบริการได้ตลอดเวลา อาจจะเพื่อเปรียบเทียบกับบริษัทที่ท่านใช้บริการอยู่ แล้วท่านจะเห็นว่าเราสามารถเสนอการบริการที่คุ้มค่าได้มากกว่า</p>
                     
                    </div>
                </div>
            </div>
           
           
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        
        <!-- /.row -->
        <hr>

@endsection

