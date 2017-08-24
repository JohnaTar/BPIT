@extends('layouts.master')
@section('content')
<style type="text/css">
    *{
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
  height: 333px;
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">กิจกรรของเรา
                    <small>บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">หน้าแรก</a>
                    </li>
                    <li class="active">กิจกรรของเรา  บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">\
            <div class="col-md-12">
      <div class="accordian">
  <ul>
    <li>
      <div class="image_title">
        <a href="#">Wedding 1</a>
      </div>
      <a href="#">
     <img src="http://farm3.staticflickr.com/2812/10121061143_e05f1619d7.jpg">
            </a>
    </li>
       <li>
      <div class="image_title">
        <a href="#">Wedding 2</a>
      </div>
      <a href="#">
     <img src="http://farm8.staticflickr.com/7435/10067483716_2b6a593ca8.jpg">
            </a>
    </li>
          <li>
      <div class="image_title">
        <a href="#">Wedding 3</a>
      </div>
      <a href="#">
     <img src="http://farm8.staticflickr.com/7310/10065811936_8debcccb71.jpg">
            </a>
    </li>
             <li>
      <div class="image_title">
        <a href="#">Wedding 4</a>
      </div>
      <a href="#">
     <img src="http://farm4.staticflickr.com/3715/10065692306_705364fa01.jpg">
            </a>
    </li>
                <li>
      <div class="image_title">
        <a href="#">Wedding 5</a>
      </div>
      <a href="#">
     <img src="http://farm4.staticflickr.com/3667/9759830873_7474bd9fc2.jpg">
            </a>
    </li>
    <li>
      <div class="image_title">
        <a href="#">Wedding 5</a>
      </div>
      <a href="#">
     <img src="http://farm4.staticflickr.com/3667/9759830873_7474bd9fc2.jpg">
            </a>
    </li>
    <li>
      <div class="image_title">
        <a href="#">Wedding 5</a>
      </div>
      <a href="#">
     <img src="http://farm4.staticflickr.com/3667/9759830873_7474bd9fc2.jpg">
            </a>
    </li>
  </ul>
</div>
                
            
            </div>
        </div>
            <!-- Map Column -->
          

       
        <!-- /.row -->

        <hr>
        
@endsection

