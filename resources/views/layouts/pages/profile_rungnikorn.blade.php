@extends('layouts.master')
@section('content')
<style type="text/css">
    .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 46%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-badge.primary {
  background-color: #428bca !important;
}
.timeline-badge.success {
  background-color: #5cb85c !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #428bca !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}
</style>
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
          <div class="row">
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
        <!-- /.row -->
        <ul class="timeline">
        <li>
          <div class="timeline-badge info"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
          
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><strong> เกิดวันที่ </strong>12 ตุลาคม 2509</h4>
              <p><small class="text-muted"> ประวัติการศึกษา</small></p>
            </div>
            <div class="timeline-body ">
                <center>
                <img class="img-thumbnail"   src="images/pmai/pmai.JPG"  width="300">
                </center>
                <hr>
              <p><strong> มัธยม</strong> - โรงเรียนอุดรพิทยานุกูล จังหวัดอุดรธานี</p>
              <p><strong> ปริญญาตรี </strong> - นิติศาสตร์ ม.ธรรมศาสตร์</p>
              <p><strong> Mini-MBA</strong> - มหาวิทยาลัยบูรพา</p>
              <p><strong> ปริญญาโท</strong> - พัฒนาแรงงานและสวัสดิการ ม.ธรรมศาสตร์</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge info"><i class="fa fa-user" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ตำแหน่งงานปัจจุบัน</h4>
            </div>
            <div class="timeline-body">
              <p><strong> กรรมการผู้จัดการ</strong>/ BPIT Holdings Co.,Ltd</p>
              <p><strong>อาจารย์พิเศษระดับ</strong> : ป.ตรี –โท; ม.ธรรมศาสตร์/ ม.เกษตรศาสตร์</p>
              <p><strong>ที่ปรึกษาองค์กรธุรกิจหลายแห่ง </strong> : ด้านงานบริหาร/ งาน HR/ งานขาย</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="fa fa-industry" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ประสบการณ์ทำงาน</h4>
            </div>
            <div class="timeline-body">
              <p><strong>อดีต : ผู้จัดการทั่วไป – บริษัท อาเจไทย จำกัด</strong> : ผลิตและจำหน่ายน้ำอัดลม “อาเจบิ๊ก โคล่า”</p>
              <p><strong>อดีต:  ผู้จัดการทั่วไป – บริษัท รอยัลฟู้ดส์ เซอร์วิส (ประเทศไทย) จำกัด</strong> : ผลิตและจำหน่ายดังกิ้นโดนัท และเบเกอรี่ “โอปองแปง”</p>
                  <p><strong> อดีต : กรรมการบริหารและผู้อำนวยการสำนักบริหารทรัพยากรบุคคลกลาง/</strong> : กลุ่มบริษัท สุรพลฟูดส์ จำกัด (มหาชน)</p>
                  <p><strong> อดีต :  ผู้อำนวยการฝ่ายทรัพยากรบุคคล</strong> : บริษัท ไทยคอปเปอร์ อินดัสตรี จำกัด (มหาชน)</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">   <div class="timeline-badge info"><i class="fa fa-share" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">งานด้านสังคม</h4>
            </div>
            <div class="timeline-body">
              <p> <strong> อดีต : </strong>กรรมการบริหารแรงงาน สภาอุตสาหกรรมแห่งประเทศไทย</p>
              <p> <strong> เป็นผู้ก่อตั้งและเป็นที่ปรึกษาชมรมบริหารงานบุคคลสมัยใหม่ </strong>(เพชรเกษม)</p>
              <p><strong>เป็นผู้ก่อตั้งชมรมบริหารงานบุคคลกรุงเทพฯ (BPM)</strong></p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ประสบการณ์งานที่ปรึกษา</h4>
            </div>
            <div class="timeline-body">
           <p><strong> สำนักงานส่งเสริมอุตสาหกรรมซอฟท์แวร์แห่งชาติ (องค์กรมหาชน) SIPA</strong> โครงการทบทวนแผนยุทธศาสตร์องค์กรและทำเป้าประสงค์การทำงาน (KPI) ของทุกฝ่ายงานและของพนักงานทุกคน **ซึ่งแผนได้รับการประเมินคะแนน 5 เต็มจากบริษัท TRIS (องค์กรที่ กพร.ว่าจ้างมาตรวจสอบแผนฯ)</p>
           <p> <strong> องค์การคลังสินค้า - กระทรวงพาณิชย์</strong> <br>
           <i class="fa fa-check" aria-hidden="true"></i> : โครงการจัดทำระบบ Functional Competency ของพนักงานทั้งองค์กร<br>
           <i class="fa fa-check" aria-hidden="true"></i> : โครงการจัดทำแผนยุทธศาสตร์และแผนปฏิบัติการเชิงบูรณาการ
           </p>
              <hr>
              
            </div>
          </div>
        </li>
        <li>
         <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ประสบการณ์งานที่ปรึกษา</h4>
            </div>
            <div class="timeline-body">
              <p><strong>บริษัท ทิปโก้ฟู้ดส์ จำกัด (มหาชน)</strong>โครงการขยายตลาดในช่องทาง Traditional Trade</p>
              <p><strong>บริษัท คังเซน-เคนโก จำกัด (ธุรกิจ MLM)</strong> จัดทำแผนธุรกิจตามแนว Management by Objectives (MBO)</p>
              <p><strong>บริษัท นิฟโก้ (ประเทศไทย) จำกัด </strong>  (บริษัทญี่ปุ่น – ผลิตชิ้นส่วนยานยนต์ ตั้งอยู่ที่นิคมอุตสาหกรรมอมตะนคร) จัดทำระบบงาน HR ทั้งระบบ<br>
                <i class="fa fa-check" aria-hidden="true"></i> : HR Competency<br>
           <i class="fa fa-check" aria-hidden="true"></i> : โครงสร้างเงินเดือน<br>
           <i class="fa fa-check" aria-hidden="true"></i> : ระบบประเมินผลการปฏิบัติงานด้วย KPIs<br>
           <i class="fa fa-check" aria-hidden="true"></i> : โครงสร้างการเติบโตในสายอาชีพ (Career Path)<br>

           </p>
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
           <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ประสบการณ์งานที่ปรึกษา</h4>
            </div>
            <div class="timeline-body">
              <p> <strong>บริษัท บางกอกกล๊าส จำกัด (มหาชน) </strong>:  ผลิตขวดแก้วและขวดพลาสติก – จัดทำ Job Description และ Job Specification ของพนักงานทั้งองค์กร</p>
               <p> <strong>บริษัท สหธาราวัฒน์ จำกัด </strong>:  (ผลิตบรรจุภัณฑ์กระป๋อง) – โครงสร้างเงินเดือนและระบบประเมินผลการปฏิบัติงาน</p>
                <p> <strong>บริษัท นารายณ์ซุปเปอร์แบค จำกัด </strong>:  (ผลิตถุงกระดาษ-ถุงพลาสติก) – โครงสร้างเงินเดือน  Competency และระบบประเมินผลการปฏิบัติงาน</p>
            </div>
          </div>
        </li>
          <li class="timeline-inverted">
           <div class="timeline-badge info"><i class="fa fa-users" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">ประสบการณ์งานเป็นวิทยากรบรรยาย<br>
              หัวข้อการบรรยาย</h4>
            </div>
            <div class="timeline-body">
              <p> <i class="fa fa-check" aria-hidden="true"></i> : การวางแผนธุรกิจและบริหารองค์กรด้วยระบบ MBO – Management by Objectives<br>
               <i class="fa fa-check" aria-hidden="true"></i> : การจัดทำแผนยุทธศาสตร์องค์กร<br>
                <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การกำหนด KPIs ให้กับฝ่ายงานต่างๆ<br>
                 <i class="fa fa-check" aria-hidden="true"></i> : Workshop – การจัดทำระบบ Balanced Scorecard<br>
                  <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การจัดทำแผนปฏิบัติการ (Action Plan)<br>
                   <i class="fa fa-check" aria-hidden="true"></i> : การวางแผนงาน<br>
                    <i class="fa fa-check" aria-hidden="true"></i> : เทคนิคการขาย/ ยอดนักขายมืออาชีพ<br>
                     <i class="fa fa-check" aria-hidden="true"></i> : พื้นฐานการลดต้นทุนในโรงงานอุตสาหกรรม<br></p>
                      <i class="fa fa-check" aria-hidden="true"></i> : พื้นฐาน 5ส<br>
                       <i class="fa fa-check" aria-hidden="true"></i> : 5ส ขั้นสูง (การจัดทำมาตรฐานพื้นที่ และเทคนิคการตรวจ 5ส)<br>
                        <i class="fa fa-check" aria-hidden="true"></i> : Workshop-การสร้างเสริมภาวะผู้นำ (Leadership)<br>
                         <i class="fa fa-check" aria-hidden="true"></i> : การทำงานเป็นทีมด้วยกิจกรรมกลุ่ม <br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Walk Rally<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Workshop – การสอนงาน<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : หลักการบริหารงานบุคคลสมัยใหม่สำหรับผู้จัดการ-ผู้บริหาร (HR Management for Non-HR)<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : กฎหมายแรงงานสำหรับหัวหน้างาน – ผู้บริหาร<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : การกำหนดและเขียนใบพรรณนาลักษณะงาน (Job Description)<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : Workshop - การจัดทำโครงสร้างเงินเดือนสมัยใหม่เพื่อสร้างแรงจูงใจในการทำงาน<br>
                          <i class="fa fa-check" aria-hidden="true"></i> : การจัดทำระบบสมรรถนะ (Competency)<br>
                            <i class="fa fa-check" aria-hidden="true"></i> : การบริหารแรงงานสัมพันธ์เชิงรุก<br>
                              <i class="fa fa-check" aria-hidden="true"></i> : ฯลฯ<br>

            </div>
          </div>
        </li>
        <li class="timeline">
           <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">องค์กรที่เคยไปบรรยาย (บางส่วน)</h4>
            </div>
            <div class="timeline-body">
              <p> <strong>บริษัท ปูนซิเมนต์ไทย จำกัด (มหาชน)</strong></p>
              <p> <strong>บริษัท ปตท.มาร์ท จำกัด (ธุรกิจค้าปลีก)</strong></p>
              <p> <strong>การไฟฟ้าฝ่ายผลิตแห่งประเทศไทย</strong></p>
              <p> <strong>บริษัท การบินไทย จำกัด (มหาชน)</strong></p>
              <p> <strong>กลุ่มโรงแรมดุสิตธานี</strong></p>
              <p> <strong>บริษัท สมูท อี จำกัด (Smooth-E); เครื่องสำอางค์</strong></p>
              <p> <strong>“เทคนิคการขาย” ให้กับ Salesman ของ Dealer รถ Isuzu ทั่วประเทศ (ในนามของ บมจ.ไทยรุ่งยูเนี่ยนคาร์)</strong></p>
              <p> <strong>บริษัท ที.ซี.ยูเนี่ยน โกลบอล จำกัด (มหาชน)</strong></p>
              <p> <strong>บริษัท ไดกิ้น แอร์คอนดิชั่นนิ่ง (ประเทศไทย) จำกัด</strong></p>
              <p> <strong>บริษัท ไทย-เยอรมัน โปรดักส์ จำกัด (มหาชน); ผลิตและจำหน่ายสแตนเลส</strong></p>
              <p> <strong>บริษัท King Pack Industrial จำกัด; ถุงพลาสติกส่งออก</strong></p>
              <p> <strong>บริษัท อาเซียน มารีน เซอร์วิส จำกัด (มหาชน); ต่อเรือ/ ซ่อมเรือเดินทะเล</strong></p>
              <p> <strong>บริษัท บูโรเวอร์ริทาส จำกัด – BVQI; ตรวจรับรอง ISO</strong></p>
              <p> <strong>บริษัท ทุนเท็กซ์ (ประเทศไทย) จำกัด (มหาชน); เคมีภัณฑ์</strong></p>
               <p> <strong>บริษัท ดรีมทีม (ประเทศไทย) จำกัด (มหาชน); ธุรกิจขายตรง</strong></p>
                <p> <strong>บริษัท ริเก้น (ไทยแลนด์) จำกัด; ผลิตเม็ดพลาสติก</strong></p>
                 <p> <strong>บริษัท เอ็มเอ็มซี สิทธิผล จำกัด; โรงงานประกอบรถยนต์</strong></p>
                  <p> <strong>บริษัท ซี.ซี.ออโต้พาร์ท จำกัด; ชิ้นส่วนรถยนต์</strong></p>
                   <p> <strong>หจก.เกร๊ทเตอร์ฟาร์ม่า; ธุรกิจยา</strong></p>
                    <p> <strong>บริษัท เคนดอล-แกมมาตรอน จำกัด; เครื่องมือแพทย์/ สำลี</strong></p> 
                    <p> <strong>บริษัท สยามอินดัสเตรียลคอร์โปเรชั่น จำกัด; จัดจำหน่ายเครื่องจักรกล</strong></p>
              
            </div>
          </div>
        </li>
          <li class="timeline-inverted">
           <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">องค์กรที่เคยไปบรรยาย (บางส่วน)</h4>
            </div>
            <div class="timeline-body">
              <p> <strong>บริษัท พี.เอส.พี.ทรานสปอร์ต จำกัด; ธุรกิจขนส่ง</strong></p>
              <p> <strong>บริษัท นีสเทิร์น อินดัสตรี้ จำกัด; เฟอร์นิเจอร์ไม้ส่งออก</strong></p>
              <p> <strong>บริษัท อาร์.เอส.แคนเนอรี่ จำกัด; ทูน่ากระป๋องส่งออก</strong></p>
              <p> <strong>กลุ่มบริษัทเกษตรรุ่งเรือง (โรงงานพนมสารคาม)</strong></p>
              <p> <strong>บริษัท ยูนิตี้สตีลคอร์โปเรชั่น จำกัด; จำหน่ายเหล็กเส้น</strong></p>
              <p> <strong>บริษัท ครีเอเทลคอม จำกัด; จัดจำหน่ายระบบสื่อสาร</strong></p>
              <p> <strong>บริษัท บางซื่อโรงสีไฟเจียเม้ง จำกัด; ข้าวตราหงษ์ทอง</strong></p>
              <p> <strong>บริษัท สุราษฎร์ซีฟู้ดส์ จำกัด; อาหารทะเลสดแช่แข็งส่งออก</strong></p>
              <p> <strong>บริษัท ทีดีเค (ประเทศไทย) จำกัด; ผลิตเทป/ CD</strong></p>
              <p> <strong>บริษัท ไทย-เยอรมันเซรามิกส์ จำกัด (มหาชน)</strong></p>
              <p> <strong>บริษัท กะรัต ฟอเซท จำกัด; ผลิตสุขภัณฑ์</strong></p>
              <p> <strong>บริษัท พัทยาอุตสาหกิจ จำกัด; Garment ในเครือสหพัฒน์ฯ</strong></p>
              <p> <strong>บริษัท ศิริบุญอินเตอร์เทรด จำกัด; ขายจักรเย็บผ้าอุตสาหกรรม</strong></p>
              <p> <strong>บริษัท อี-บิสสิเนส พลัส จำกัด; ขาย Software</strong></p>
               <p> <strong>บริษัท สยามนิสทรานส์ จำกัด; ธุรกิจ Logistics</strong></p>
                <p> <strong>บริษัท อีด้า-เซเว่น ซันส์  จำกัด; เป็น Distributor ของผลิตภัณฑ์ Shell</strong></p>
                 <p> <strong>บริษัท สฟีริค - ทราแฟลการ์ (ประเทศไทย) จำกัด; ผลิตลูกปืนในอุตสาหกรรม</strong></p>
                  <p> <strong>บริษัท ไทยไก้ จำกัด; อุปกรณ์ electronic ด้าน safety</strong></p>
                   <p> <strong>บริษัท กัทส์ อินเวสติเกชั่น จำกัด; ธุรกิจรักษาความปลอดภัย</strong></p>
                    <p> <strong>บริษัท กัทส์ อินเวสติเกชั่น จำกัด; ธุรกิจรักษาความปลอดภัย</strong></p> 
                    <p> <strong>บริษัท พีแอนด์เอฟ อโกรอินดัสตรี้ จำกัด; เนื้อสุกรส่งออก</strong></p>
              
            </div>
          </div>
        </li>
        <li class="timeline">
           <div class="timeline-badge info"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">องค์กรที่เคยไปบรรยาย (บางส่วน)</h4>
            </div>
            <div class="timeline-body">
              <p> <strong>บริษัท สยามอุตสาหกรรมการเกษตร สัปปะรด และอื่นๆ จำกัด (มหาชน)</strong></p>
              <p> <strong>Rulmeca Thailand Co.,Ltd; ผลิต Roller สำหรับงานอุตสาหกรรม</strong></p>
              <p> <strong>กลุ่มบริษัท ไทยโพลิเมอร์เลนส์ จำกัด; กลุ่มหอแว่น</strong></p>
              <p> <strong>บริษัท ปิโตรเคมีแห่งชาติ จำกัด (มหาชน)</strong></p>
              <p> <strong>บ. เดอะคอมมูนิเคชั่น โซลูชั่น จำกัด; ซีดีจีกรุ๊ป ธุรกิจ IT</strong></p>
              <p> <strong>Optimal Group – ผลิตภัณฑ์เสริมความงาม</strong></p>
              <p> <strong>บริษัท ห้องเย็นโชติวัฒน์หาดใหญ่ จำกัด (มหาชน) </strong></p>
              <p> <strong>บริษัท ไทยคากินูมา จำกัด; บริการซ่อมเครื่องจักรอุตสาหกรรม</strong></p>
              <p> <strong>บริษัท ห้องเย็นโชติวัฒน์หาดใหญ่ จำกัด (มหาชน)</strong></p>
              <p> <strong>บริษัท สุรพลนิชิเรฟู้ดส์ จำกัด; ไก่ทอดแช่แข็งส่งออก</strong></p>
              <p> <strong>บริษัท การ์กั้น (ประเทศไทย) จำกัด; เสื้อผ้าแฟชั่นจากสเปน</strong></p>
              <p> <strong>บริษัท แดพเปอร์ เจนเนอรัล อะแพเร็ล จำกัด; เสื้อผ้าแฟชั่น</strong></p>
              <p> <strong>บริษัท ชุ้งค์ ยูไนเต็ด คาร์บอน จำกัด</strong></p>
              <p> <strong>บริษัท ชุ้งค์ ยูไนเต็ด คาร์บอน จำกัด</strong></p>
               <p> <strong>สมาคมนักทรัพยากรมนุษย์อมตะนคร (ชลบุรี)</strong></p>
                <p> <strong>ชมรมบริหารงานบุคคลอมตะซิตี้ (ระยอง)</strong></p>
                 <p> <strong>ชมรมบริหารงานบุคคลเชียงใหม่</strong></p>
                  <p> <strong>ชมรมบริหารงานบุคคลกรุงเทพ</strong></p>
                   <p> <strong>ชมรมบริหารงานบุคคลยุคใหม่</strong></p>
                    
              
            </div>
          </div>
        </li>
        
    </ul>
        </div>
        
        
        <!-- /.row -->

        <!-- Our Customers -->
        

        <hr>

@endsection

