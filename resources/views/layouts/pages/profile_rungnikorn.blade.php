@extends('layouts.master')
@section('content')
<style type="text/css">
  .main-timeline{ position: relative; }
.main-timeline:before,
.main-timeline:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}
.main-timeline:before{
    content: "";
    width: 3px;
    height: 100%;
    background: #302124;
    position: absolute;
    top: 0;
    left: 50%;
}
.main-timeline .timeline{
    width: 50%;
    float: left;
    position: relative;
    z-index: 1;
}
.main-timeline .timeline:before,
.main-timeline .timeline:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}
.main-timeline .timeline:first-child:before,
.main-timeline .timeline:last-child:before{
    content: "";
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #fff;
    border: 4px solid #cca872;
    position: absolute;
    top: 0;
    right: -14px;
    z-index: 1;
}
.main-timeline .timeline:last-child:before{
    top: auto;
    bottom: 0;
}
.main-timeline .timeline:last-child:nth-child(even):before{
    right: auto;
    left: -12px;
    bottom: -2px;
}
.main-timeline .timeline-content{
    text-align: center;
    margin-top: 8px;
    position: relative;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline-content:before{
    content: "";
    width: 100%;
    height: 5px;
    background: #cca872;
    position: absolute;
    top: 88px;
    left: 0;
    z-index: -1;
}
.main-timeline .circle{
    width: 180px;
    height: 180px;
    border-radius: 50%;
    background: #fff;
    border: 8px solid #cca872;
    float: left;
    margin-right: 25px;
    position: relative;
}
.main-timeline .circle:before{
    content: "";
    width: 26px;
    height: 30px;
    background: #cca872;
    margin: auto;
    position: absolute;
    top: 0;
    right: -33px;
    bottom: 0;
    z-index: -1;
    box-shadow: inset 7px 0 9px -7px #444;
}
.main-timeline .circle span{
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    line-height: 160px;
    border: 3px solid #adabab;
    font-size: 80px;
    color: #454344;
}
.main-timeline .circle span:before,
.main-timeline .circle span:after{
    content: "";
    width: 28px;
    height: 50px;
    background: #fff;
    border-radius: 0 0 0 21px;
    margin: auto;
    position: absolute;
    top: -54px;
    right: -33px;
    bottom: 0;
    z-index: -1;
}
.main-timeline .circle span:after{
    border-radius: 21px 0 0 0;
    top: 0;
    bottom: -56px;
}
.main-timeline .content{
    display: table;
    padding-right: 40px;
    position: relative;
}
.main-timeline .year{
    display: block;
    padding: 10px;
    margin: 10px 0 50px 0;
    background: #cca872;
    border-radius: 7px;
    font-size: 25px;
    color: #fff;
}
.main-timeline .title{
    font-size: 25px;
    font-weight: bold;
    color: #cca872;
    margin-top: 0;
}
.main-timeline .description{
    font-size: 14px;
   
    text-align: left;
}
.main-timeline .icon{
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #fff;
    border: 4px solid #cca872;
    position: absolute;
    top: 78px;
    right: -14px;
}
.main-timeline .icon:before{
    content: "";
    width: 15px;
    height: 25px;
    background: #cca872;
    margin: auto;
    position: absolute;
    top: -1px;
    left: -15px;
    bottom: 0;
    z-index: -1;
}
.main-timeline .icon span:before,
.main-timeline .icon span:after{
    content: "";
    width: 21px;
    height: 25px;
    background: #fff;
    border-radius: 0 0 21px 0;
    margin: auto;
    position: absolute;
    top: -30px;
    left: -15px;
    bottom: 0;
    z-index: -1;
}
.main-timeline .icon span:after{
    border-radius: 0 21px 0 0;
    top: 0;
    left: -15px;
    bottom: -30px;
}
.main-timeline .timeline:nth-child(2n) .timeline-content,
.main-timeline .timeline:nth-child(2n) .circle{
    float: right;
}
.main-timeline .timeline:nth-child(2n) .circle{
    margin: 0 0 0 25px;
}
.main-timeline .timeline:nth-child(2n) .circle:before{
    right: auto;
    left: -33px;
    box-shadow: -7px 0 9px -7px #444 inset;
}
.main-timeline .timeline:nth-child(2n) .circle span:before,
.main-timeline .timeline:nth-child(2n) .circle span:after{
    right: auto;
    left: -33px;
    border-radius: 0 0 21px 0;
}
.main-timeline .timeline:nth-child(2n) .circle span:after{
    border-radius: 0 21px 0 0;
}
.main-timeline .timeline:nth-child(2n) .content{
    padding: 0 0 0 40px;
    margin-left: 2px;
}
.main-timeline .timeline:nth-child(2n) .icon{
    right: auto;
    left: -14px;
}
.main-timeline .timeline:nth-child(2n) .icon:before,
.main-timeline .timeline:nth-child(2n) .icon span:before,
.main-timeline .timeline:nth-child(2n) .icon span:after{
    left: auto;
    right: -15px;
}
.main-timeline .timeline:nth-child(2n) .icon span:before{
    border-radius: 0 0 0 21px;
}
.main-timeline .timeline:nth-child(2n) .icon span:after{
    border-radius: 21px 0 0 0;
}
.main-timeline .timeline:nth-child(2){
    margin-top: 180px;
}
.main-timeline .timeline:nth-child(odd){
    margin: -175px 0 0 0;
}
.main-timeline .timeline:nth-child(even){
    margin-bottom: 80px;
}
.main-timeline .timeline:first-child,
.main-timeline .timeline:last-child:nth-child(even){
    margin: 0;
}
@media only screen and (max-width: 990px){
    .main-timeline:before{ left: 100%; }
    .main-timeline .timeline{
        width: 100%;
        float: none;
        margin-bottom: 20px !important;
    }
    .main-timeline .timeline:first-child:before,
    .main-timeline .timeline:last-child:before{
        left: auto !important;
        right: -13px !important;
    }
    .main-timeline .timeline:nth-child(2n) .circle{
        float: left;
        margin: 0 25px 0 0;
    }
    .main-timeline .timeline:nth-child(2n) .circle:before{
        right: -33px;
        left: auto;
        box-shadow: 7px 0 9px -7px #444 inset;
    }
    .main-timeline .timeline:nth-child(2n) .circle span:before,
    .main-timeline .timeline:nth-child(2n) .circle span:after{
        right: -33px;
        left: auto;
        border-radius: 0 0 0 21px;
    }
    .main-timeline .timeline:nth-child(2n) .circle span:after{
        border-radius: 21px 0 0 0;
    }
    .main-timeline .timeline:nth-child(2n) .content{
        padding: 0 40px 0 0;
        margin-left: 0;
    }
    .main-timeline .timeline:nth-child(2n) .icon{
        right: -14px;
        left: auto;
    }
    .main-timeline .timeline:nth-child(2n) .icon:before,
    .main-timeline .timeline:nth-child(2n) .icon span:before,
    .main-timeline .timeline:nth-child(2n) .icon span:after{
        left: -15px;
        right: auto;
    }
    .main-timeline .timeline:nth-child(2n) .icon span:before{
        border-radius: 0 0 21px 0;
    }
    .main-timeline .timeline:nth-child(2n) .icon span:after{
        border-radius: 0 21px 0 0;
    }
    .main-timeline .timeline:nth-child(2),
    .main-timeline .timeline:nth-child(odd),
    .main-timeline .timeline:nth-child(even){
        margin: 0;
    }
}
@media only screen and (max-width: 480px){
    .main-timeline:before{ left: 0; }
    .main-timeline .timeline:first-child:before,
    .main-timeline .timeline:last-child:before{
        left: -12px !important;
        right: auto !important;
    }
    .main-timeline .circle,
    .main-timeline .timeline:nth-child(2n) .circle{
        width: 130px;
        height: 130px;
        float: none;
        margin: 0 auto;
    }
    .main-timeline .timeline-content:before{
        width: 99.5%;
        top: 68px;
        left: 0.5%;
    }
    .main-timeline .circle span{
        line-height: 115px;
        font-size: 60px;
    }
    .main-timeline .circle:before,
    .main-timeline .circle span:before,
    .main-timeline .circle span:after,
    .main-timeline .icon{
        display: none;
    }
    .main-timeline .content,
    .main-timeline .timeline:nth-child(2n) .content{
        padding: 0 10px;
    }
    .main-timeline .year{
        margin-bottom: 15px;
    }
    .main-timeline .description{
        text-align: center;
    }
}
</style>
 <div class="container" >

        <!-- Page Heading/Breadcrumbs -->
        
        <!-- /.row -->

        <!-- Intro Content -->
 
        <div class="row spanish">
            <div class="col-lg-12">
                <h1 class="page-header"> ประวัติ อ.รุ่งนิกร
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">หน้าแรก</a>
                    </li>
                    <li class="active">ประวัติ อ.รุ่งนิกร</li>
                </ol>
            </div>
        </div>
         
      <div class="row spanish">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="timeline">
                    <div class="timeline-content">
                       <img class="circle" src="images/pmai/pmai.JPG" >
                        <div class="content">
                            <span class="year">ประวัติ อ.รุ่งนิกร</span>
                            <h4 class="title">ประวัติการศึกษา</h4>
                            <p class="description">
                            <strong>เกิดวันที่</strong>  12 ตุลาคม 2509 <br>
                              <strong>มัธยม</strong> - โรงเรียนอุดรพิทยานุกูล จังหวัดอุดรธานี <br>
                              <strong>ปริญญาตรี </strong> - นิติศาสตร์ ม.ธรรมศาสตร์ <br>
                              <strong>Mini-MBA</strong> - มหาวิทยาลัยบูรพา<br>
                              <strong>ปริญญาโท</strong> - พัฒนาแรงงานและสวัสดิการ ม.ธรรมศาสตร์
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-content">
                  <img class="circle" src="images/companny/h2.jpg" >
                        <div class="content">
                            <span class="year">ตำแหน่งงานปัจจุบัน</span>
                            <h4 class="title"></h4>
                            <p class="description">
                               <strong>   กรรมการผู้จัดการ </strong>: BPIT Holdings Co.,Ltd <br>
                          <strong> อาจารย์พิเศษระดับ </strong>: ป.ตรี –โท; ม.ธรรมศาสตร์/ ม.เกษตรศาสตร์<br>
                        <strong>ที่ปรึกษาองค์กรธุรกิจหลายแห่ง </strong>: ด้านงานบริหาร/ งาน HR/ งานขาย
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">ประสบการณ์ทำงาน</span>
                            <h4 class="title"></h4>
                            <p class="description">
                              <strong>อดีตผู้จัดการทั่วไป – บริษัท อาเจไทย จำกัด</strong> : ผลิตและจำหน่ายน้ำอัดลม “อาเจบิ๊ก โคล่า” <br>
                              <strong>อดีตผู้จัดการทั่วไป – บริษัท รอยัลฟู้ดส์ เซอร์วิส (ประเทศไทย) จำกัด</strong> : ผลิตและจำหน่ายดังกิ้นโดนัท และเบเกอรี่ “โอปองแปง” <br>
                              <strong>อดีตกรรมการบริหารและผู้อำนวยการสำนักบริหารทรัพยากรบุคคลกลาง</strong> : กลุ่มบริษัท สุรพลฟูดส์ จำกัด (มหาชน) <br>
                              <strong>อดีต : ผู้อำนวยการฝ่ายทรัพยากรบุคคล</strong> : บริษัท ไทยคอปเปอร์ อินดัสตรี จำกัด (มหาชน)
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">งานด้านสังคม</span>
                            <h4 class="title"></h4>
                            <p class="description">
                               อดีตกรรมการบริหารแรงงาน สภาอุตสาหกรรมแห่งประเทศไทย <br>
                               เป็นผู้ก่อตั้งและเป็นที่ปรึกษาชมรมบริหารงานบุคคลสมัยใหม่ (เพชรเกษม) <br>
                               เป็นผู้ก่อตั้งชมรมบริหารงานบุคคลกรุงเทพฯ (BPM)
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-content">
                         <img class="circle" src="images/training/tr6.png" >
                        <div class="content">
                            <span class="year">ที่ปรึกษาภาครัฐ (บางส่วน)</span>
                            <h4 class="title"></h4>
                            <p class="description">
                                <strong>องค์การสุรา กรมสรรพสามิต</strong> <br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : แผนอัตรากำลังและโครงสร้างองค์กร<br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : KPIs<br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : Core Competency<br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : Functional Compentency<br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : โครงสร้างเงินเดือน<br>
                                  <i class="fa fa-check" aria-hidden="true"></i> : แผนพัฒนาบุคคล
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                         <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">ที่ปรึกษาภาครัฐ (บางส่วน)</span>
                            <h4 class="title"></h4>
                            <p class="description">
                                <strong>สำนักงานส่งเสริมอุตสาหกรรมซอฟท์แวร์แห่งชาติ (องค์กรมหาชน) SIPA</strong> : โครงการทบทวนแผนยุทธศาสตร์องค์กรและทำเป้าประสงค์การทำงาน (KPI) ของทุกฝ่ายงานและของพนักงานทุกคน **ซึ่งแผนได้รับการประเมินคะแนน 5 เต็มจากบริษัท TRIS (องค์กรที่ กพร.ว่าจ้างมาตรวจสอบแผนฯ) <br>
                              <strong>องค์การคลังสินค้า - กระทรวงพาณิชย์ </strong> <br>
                               <i class="fa fa-check" aria-hidden="true"></i> : โครงการจัดทำระบบ Functional Competency ของพนักงานทั้งองค์กร<br>
                               <i class="fa fa-check" aria-hidden="true"></i> : โครงการจัดทำแผนยุทธศาสตร์และแผนปฏิบัติการเชิงบูรณาการ

                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                 <div class="timeline">
                    <div class="timeline-content">
                       <img class="circle" src="images/training/tr1.png" >
                        <div class="content">
                            <span class="year">ที่ปรึกษาภาคเอกชน (บางส่วน)</span>
                            <h4 class="title"></h4>
                            <p class="description">
                                <strong>บริษัท ทิปโก้ฟู้ดส์ จำกัด (มหาชน)</strong> : โครงการขยายตลาดในช่องทาง Traditional Trade <br>
                                <strong>บริษัท คังเซน-เคนโก จำกัด (ธุรกิจ MLM)</strong> : จัดทำแผนธุรกิจตามแนว Management by Objectives (MBO) <br>
                                <strong>บริษัท นิฟโก้ (ประเทศไทย) จำกัด</strong> : บริษัทญี่ปุ่น – ผลิตชิ้นส่วนยานยนต์ ตั้งอยู่ที่นิคมอุตสาหกรรมอมตะนคร) จัดทำระบบงาน HR ทั้งระบบ <br>

                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
   <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">ที่ปรึกษาภาคเอกชน(บางส่วน)</span>
                            <h4 class="title"></h4>
                            <p class="description">
                                <strong>บริษัท บางกอกกล๊าส จำกัด (มหาชน)</strong> : ผลิตขวดแก้วและขวดพลาสติก – จัดทำ Job Description และ Job Specification ของพนักงานทั้งองค์กร <br>
                                <strong>บริษัท สหธาราวัฒน์ จำกัด</strong> : ผลิตบรรจุภัณฑ์กระป๋อง – โครงสร้างเงินเดือนและระบบประเมินผลการปฏิบัติงาน <br>
                                <strong>บริษัท นารายณ์ซุปเปอร์แบค จำกัด</strong> : ผลิตถุงกระดาษ-ถุงพลาสติก – โครงสร้างเงินเดือน Competency และระบบประเมินผลการปฏิบัติงาน <br>

                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
<div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">หัวข้อการบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                                <i class="fa fa-check" aria-hidden="true"></i> : การวางแผนธุรกิจและบริหารองค์กรด้วยระบบ MBO – Management by Objectives<br>
                                 <i class="fa fa-check" aria-hidden="true"></i> : การจัดทำแผนยุทธศาสตร์องค์กร<br>
                <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การกำหนด KPIs ให้กับฝ่ายงานต่างๆ<br>
                 <i class="fa fa-check" aria-hidden="true"></i> : Workshop – การจัดทำระบบ Balanced Scorecard<br>
                  <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การจัดทำแผนปฏิบัติการ (Action Plan)<br>
                   <i class="fa fa-check" aria-hidden="true"></i> : การวางแผนงาน<br>
                    <i class="fa fa-check" aria-hidden="true"></i> : เทคนิคการขาย/ ยอดนักขายมืออาชีพ<br>
                     <i class="fa fa-check" aria-hidden="true"></i> : พื้นฐานการลดต้นทุนในโรงงานอุตสาหกรรม
                

                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">หัวข้อการบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                              <i class="fa fa-check" aria-hidden="true"></i> : พื้นฐาน 5ส<br>
                       <i class="fa fa-check" aria-hidden="true"></i> : 5ส ขั้นสูง (การจัดทำมาตรฐานพื้นที่ และเทคนิคการตรวจ 5ส)<br>
                        <i class="fa fa-check" aria-hidden="true"></i> : Workshop-การสร้างเสริมภาวะผู้นำ (Leadership)<br>
                         <i class="fa fa-check" aria-hidden="true"></i> : การทำงานเป็นทีมด้วยกิจกรรมกลุ่ม <br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Walk Rally<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Workshop – การสอนงาน<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : หลักการบริหารงานบุคคลสมัยใหม่สำหรับผู้จัดการ-ผู้บริหาร (HR Management for Non-HR)<br>
   
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">หัวข้อการบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                         <i class="fa fa-check" aria-hidden="true"></i> : หลักการบริหารงานบุคคลสมัยใหม่สำหรับผู้จัดการ-ผู้บริหาร (HR Management for Non-HR)<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : กฎหมายแรงงานสำหรับหัวหน้างาน – ผู้บริหาร<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : การกำหนดและเขียนใบพรรณนาลักษณะงาน (Job Description)<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การจัดทำโครงสร้างเงินเดือนสมัยใหม่เพื่อสร้างแรงจูงใจในการทำงาน<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : การจัดทำระบบสมรรถนะ (Competency)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> : การบริหารแรงงานสัมพันธ์เชิงรุก<br>
                              <i class="fa fa-check" aria-hidden="true"></i> : ฯลฯ<br>
           
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  
<div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">องค์กรที่เคยไปบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                         บริษัท ปูนซิเมนต์ไทย จำกัด (มหาชน)<br>
                         บริษัท ปตท.มาร์ท จำกัด (ธุรกิจค้าปลีก)<br>
                        การไฟฟ้าฝ่ายผลิตแห่งประเทศไทย<br>
                        บริษัท การบินไทย จำกัด (มหาชน)<br>
                        กลุ่มโรงแรมดุสิตธานี<br>
                          บริษัท สมูท อี จำกัด (Smooth-E); เครื่องสำอางค์<br>
                          เทคนิคการขาย” ให้กับ Salesman ของ Dealer รถ Isuzu ทั่วประเทศ (ในนามของ บมจ.ไทยรุ่งยูเนี่ยนคาร์)<br>

                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  
<div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">องค์กรที่เคยไปบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                         บริษัท ที.ซี.ยูเนี่ยน โกลบอล จำกัด (มหาชน)<br>
                         บริษัท ไดกิ้น แอร์คอนดิชั่นนิ่ง (ประเทศไทย) จำกัด<br>  
                         บริษัท ไทย-เยอรมัน โปรดักส์ จำกัด (มหาชน); ผลิตและจำหน่ายสแตนเลส<br>
                        บริษัท King Pack Industrial จำกัด; ถุงพลาสติกส่งออก<br>
                        บริษัท อาเซียน มารีน เซอร์วิส จำกัด (มหาชน); ต่อเรือ/ ซ่อมเรือเดินทะเล<br>
                        บริษัท บูโรเวอร์ริทาส จำกัด – BVQI; ตรวจรับรอง ISO<br>
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  
<div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">องค์กรที่เคยไปบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                       บริษัท ทุนเท็กซ์ (ประเทศไทย) จำกัด (มหาชน); เคมีภัณฑ์<br>  
                       บริษัท ดรีมทีม (ประเทศไทย) จำกัด (มหาชน); ธุรกิจขายตรง<br>
                       บริษัท ริเก้น (ไทยแลนด์) จำกัด; ผลิตเม็ดพลาสติก<br>
                       บริษัท เอ็มเอ็มซี สิทธิผล จำกัด; โรงงานประกอบรถยนต์<br>
                       บริษัท ซี.ซี.ออโต้พาร์ท จำกัด; ชิ้นส่วนรถยนต์<br>
                       หจก.เกร๊ทเตอร์ฟาร์ม่า; ธุรกิจยา<br>
                       บริษัท เคนดอล-แกมมาตรอน จำกัด; เครื่องมือแพทย์/ สำลี<br>
           
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-content">
                        <div class="circle"><span><i class="fa fa-briefcase"></i></span></div>
                        <div class="content">
                            <span class="year">องค์กรที่เคยไปบรรยาย</span>
                            <h4 class="title"></h4>
                            <p class="description">
                      บริษัท สยามอินดัสเตรียลคอร์โปเรชั่น จำกัด; จัดจำหน่ายเครื่องจักรกล<br>  
                     บริษัท พี.เอส.พี.ทรานสปอร์ต จำกัด; ธุรกิจขนส่ง<br>
                       บริษัท นีสเทิร์น อินดัสตรี้ จำกัด; เฟอร์นิเจอร์ไม้ส่งออก<br>
                      บริษัท อาร์.เอส.แคนเนอรี่ จำกัด; ทูน่ากระป๋องส่งออก<br>
                       กลุ่มบริษัทเกษตรรุ่งเรือง (โรงงานพนมสารคาม)<br>
                     บริษัท ยูนิตี้สตีลคอร์โปเรชั่น จำกัด; จำหน่ายเหล็กเส้น<br>
                       
           
                            </p>
                            <div class="icon"><span></span></div>
                        </div>
                    </div>
                </div>
  








            </div> <!-- main -->
        </div> <!-- col -->
    </div> <!-- row -->

        

        <hr>

@endsection


                    
              