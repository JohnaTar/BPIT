@extends('layouts.master')
@section('content')
<style type="text/css">
    .stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สมัครสมาชิก
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">หน้าแรก</a>
                    </li>
                    <li class="active">สมัครสมาชิก</li>
                </ol>
            </div>
        </div>
        <div class="container">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">ข้อมูลการใช้งาน</p>
                    </a></li>
                    <li class="disabled"><a href="#step-2">
                        <h4 class="list-group-item-heading">Step 2</h4>
                        <p class="list-group-item-text">ข้อมูลส่วนตัว</p>
                    </a></li>
                    <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">Third step description</p>
                    </a></li>
                    <li class="disabled"><a href="#step-4">
                        <h4 class="list-group-item-heading">Step 4</h4>
                        <p class="list-group-item-text">Second step description</p>
                    </a></li>    
                </ul>
            </div>
        </div>
    </div>  

        <!-- /.row -->

<form class="form-horizontal" method="POST" action="post_register">
   {{ csrf_field() }}
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1> STEP 1</h1>

<!-- <form> -->               
                
    <div class="container col-xs-12">
<div class="row clearfix">

  

     <div class="col-md-12 column">
            <div class="form-group{{ $errors->has('id_card') ? ' has-error' : '' }}" >
                    <label class="col-md-4 control-label" for="fn">หมายเลขบัตรประชาชน (ID-Card)</label> 
  
            <div class="col-md-4">
              <div id="staticParent"><!-- #number only --> 
                    <input  name="id_card"  type="text" placeholder="หมายเลขบัตรประชาชน" class="form-control input-md"   id="personal"
                    value="{{ old('id_card') }}">
                      @if ($errors->has('id_card'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_card') }}</strong>
                                    </span>
                        @endif

                </div>
            </div>
        </div>

         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">ชื่อผู้ใช้งาน (Username)</label>  
            <div class="col-md-4">
                    <input  name="username"  type="text" placeholder="ชื่อผู้ใช้งาน" class="form-control input-md" value="{{ old('username') }}" >
                      @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                   
            </div>
        </div>
         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">รหัสผู้ใช้งาน (Password)</label>  
            <div class="col-md-4">
                    <input  name="password"  type="text" placeholder="รหัสผู้ใช้งาน" class="form-control input-md"   >
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสผู้ใช้งาน (Password Confirmation)</label>  
            <div class="col-md-4">
                    <input  name="password_confirmation"  type="text" placeholder="ยืนยันรหัสผู้ใช้งาน" class="form-control input-md"  >
                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์ (Email)</label>  
            <div class="col-md-4">
                    <input  name="email"  type="text" placeholder="อีเมลล์" class="form-control input-md"    value="{{ old('email') }}">
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    
            </div>
        </div>
        
      
<!-- <div class="alert alert-error">
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
    
</div> -->
        

            
    </div>
</div>
     
    </div>
                
<!-- </form> -->
                
                <button id="activate-step-2"   class="btn btn-primary btn-md">ยืนยันข้อมูล</button>
            </div>
        </div>
    </div>
        



<div class="form-horizontal">

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 2</h1>
                 <div class="form-group{{ $errors->has('positionapplied') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">ตำแหน่งงานที่สมัคร (Position Applied)</label>  
            <div class="col-md-4">
                    <input  name="positionapplied"  type="text" placeholder="ตำแหน่งงานที่สมัคร" class="form-control input-md" value="{{ old('positionapplied') }}"> 
                @if ($errors->has('positionapplied'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('positionapplied') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
         <div class="form-group{{ $errors->has('expectedsalary') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">เงินเดือนขั้นต่ำที่ต้องการ (Expected Salary)</label>  
            <div class="col-md-4">
                    <input  name="expectedsalary"  type="text" placeholder="เงินเดือนขั้นต่ำที่ต้องการ" class="form-control input-md"  
                    value="{{ old('expectedsalary') }}"> 
             @if ($errors->has('expectedsalary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expectedsalary') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
          <div class="form-group{{ $errors->has('provincedistrict') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">จังหวัดเขตที่สามารถไปทำงานได้ (Province District)</label>  
            <div class="col-md-4">
                    <input  name="provincedistrict" type="text" placeholder="จังหวัดเขตที่สามารถไปทำงานได้" class="form-control input-md" 
                       value="{{ old('provincedistrict') }}"> 
                 @if ($errors->has('provincedistrict'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provincedistrict') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
        <hr>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn" style="color: red;">รายละเอียดส่วนตัวของผู้สมัคร (PERSONAL DETAILS)</label> 
        </div>
          <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">ชื่อ-นามสกุล (ภาษาไทย)</label>  
            <div class="col-md-4">
                    <input  name="firstname"  type="text" placeholder="ชื่อ-นามสกุล" class="form-control input-md"  value="{{ old('firstname') }}">
                  @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
         <div class="form-group{{ $errors->has('englishname') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">Name-Surname (English)</label>  
            <div class="col-md-4">
                    <input  name="englishname"  type="text" placeholder="Name-Surname" class="form-control input-md" value="{{ old('englishname') }}"> 
                    @if ($errors->has('englishname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('englishname') }}</strong>
                                    </span>
                        @endif
            
            </div>
        </div>
       
        <div class="form-group{{ $errors->has('dateofbirth') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">วันเดือนปีเกิด (Date of Birth)</label>  
            <div class="col-md-4">
                    <input  name="dateofbirth"  type="text" placeholder="วันเดือนปีเกิด" class="form-control input-md" id="dob" value="{{ old('dateofbirth') }}">
                    @if ($errors->has('dateofbirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                        @endif
                
            </div>
        </div>
         <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">อายุ (Age)</label>  
            <div class="col-md-2">
                    <input  name="age"  type="text" placeholder="อายุ" class="form-control input-md"  id="age" value="{{ old('age') }}">
       @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                        @endif
                  
            </div>
        </div>
         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-2">
                    <select  name="gender" class="form-control input-md" >
                <option value="" >--เลือก--</option>
               <option value ='1' @if(old('gender')=='1')selected @endif>ชาย</option>
               <option value ='2'@if(old('gender')=='2')selected @endif>หญิง</option>
                
                </select>
                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                        @endif
                </div>
            </div>


<script type="text/javascript">
  $('#dob').datepicker({
   
    maxDate: '+0d',
    yearRange: '1970:2010',
    changeMonth: true,
    changeYear: true,
    dateFormat: 'dd/mm/yy' 

});
  $(document).ready(function () {
  handleDOBChanged();
});

//listener on date of birth field
function handleDOBChanged() {
    $('#dob').on('change', function () {
      if (isDate($('#dob').val())) {
        var age = calculateAge(parseDate($('#dob').val()), new Date());
        $("#age").val(age);   
      } else {
        $("#age").val('');   
      }      
    });
}

//convert the date string in the format of dd/mm/yyyy into a JS date object
function parseDate(dateStr) {
  var dateParts = dateStr.split("/");
  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
}

//is valid date format
function calculateAge (dateOfBirth, dateToCalculate) {
    var calculateYear = dateToCalculate.getFullYear();
    var calculateMonth = dateToCalculate.getMonth();
    var calculateDay = dateToCalculate.getDate();

    var birthYear = dateOfBirth.getFullYear();
    var birthMonth = dateOfBirth.getMonth();
    var birthDay = dateOfBirth.getDate();

    var age = calculateYear - birthYear;
    var ageMonth = calculateMonth - birthMonth;
    var ageDay = calculateDay - birthDay;

    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
        age = parseInt(age) - 1;
    }
    return age;
}

function isDate(txtDate) {
  var currVal = txtDate;
  if (currVal == '')
    return true;

  //Declare Regex
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  var dtArray = currVal.match(rxDatePattern); // is format OK?

  if (dtArray == null)
    return false;

  //Checks for dd/mm/yyyy format.
  var dtDay = dtArray[1];
  var dtMonth = dtArray[3];
  var dtYear = dtArray[5];

  if (dtMonth < 1 || dtMonth > 12)
    return false;
  else if (dtDay < 1 || dtDay > 31)
    return false;
  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
    return false;
  else if (dtMonth == 2) {
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay > 29 || (dtDay == 29 && !isleap))
      return false;
  }

  return true;
}


</script>

         <div class="form-group{{ $errors->has('tall') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label" for="fn">ส่วนสูง (CM)</label>  
            <div class="col-md-2">
                    <input  name="tall"  type="text" placeholder="ส่วนสูง" class="form-control input-md" value="{{ old('tall') }}" >
                    @if ($errors->has('tall'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tall') }}</strong>
                                    </span>
                        @endif
            </div>
        </div>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">น้ำหนัก (KG)</label>  
            <div class="col-md-2">
                    <input  name="stwUsername"  type="text" placeholder="น้ำหนัก" class="form-control input-md"  >
                    <span id="msg1"></span>
            </div>
        </div>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">สัญชาติ (Race)</label>  
            <div class="col-md-2">
                    <input  name="stwUsername"  type="text" placeholder="สัญชาติ" class="form-control input-md"  >
                    <span id="msg1"></span>
            </div>
        </div>
         <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ที่อยู่ปัจจุบัน (Present Address)</label>  
            <div class="col-md-4">
                    <textarea rows="5" class="form-control input-md" placeholder="ที่อยู่ปัจจุบัน"></textarea>
                    <span id="msg1"></span>
            </div>
        </div>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">โทรศัพท์ (Tel.no)</label>  
            <div class="col-md-4">
                    <input  name="stwUsername"  type="text" placeholder="โทรศัพท์" class="form-control input-md"  >
                    <span id="msg1"></span>
            </div>
        </div>
         <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ศาสนา (Religion)</label>  
            <div class="col-md-4">
                    <input  name="stwUsername"  type="text" placeholder="ศาสนา" class="form-control input-md"  >
                    <span id="msg1"></span>
            </div>
        </div>
         <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">สภานภาพทางทหาร (Military Status)</label>  
            <div class="col-md-4">
                    <input  name="stwUsername"  type="text" placeholder="สภานภาพทางทหาร" class="form-control input-md"  >
                    <span id="msg1"></span>
            </div>
        </div>
        

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="fn">สถานภาพการสมรส (Marital Status)</label>  
                               <div class="col-md-4">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="5" checked>โสด (Single)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="6">หย่าร้าง (Divorced)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">แต่งงาน
                                    </label>
                                </div>
                            </div>
                            </div>

<div id="myRadioGroup">


    
    <div id="Cars3" class="desc" style="display: none;">
    <hr>
       <div class="form-group">
                    <label class="col-md-4 control-label" for="fn" style="color: red;">คู่สมรส (Wife/Husband</label> 
        </div>
         <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ - นามสกุล</label>  
            <div class="col-md-4">
                    <input  name="stwUsername"  type="text" placeholder="ชื่อ - นามสกุล" class="form-control input-md"  >
                    
            </div>
        </div>
         <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อายุ (Age)</label>  
            <div class="col-md-2">
                    <input  name="stwUsername"  type="text" placeholder="อายุ" class="form-control input-md"  >
             
            </div>
        </div>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อาชีพ</label>  
            <div class="col-md-2">
                    <input  name="stwUsername"  type="text" placeholder="อาชีพ" class="form-control input-md"  >
             
            </div>
        </div>
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อาชีพ</label>  
            <div class="col-md-2">
                    <input  name="stwUsername"  type="text" placeholder="อาชีพ" class="form-control input-md"  >
             
            </div>
        </div>
          

 

    </div>
</div>


<script type="text/javascript">

    $(document).ready(function() {
    $("input[name$='optionsRadios']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });  
});


</script>


                

                
                <button type="submit" class="btn btn-primary btn-md">ยืนยันข้อมูล</button>
            </div>
        </div>
    </div>

</form>

<div class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 3</h1>
                
<!--<form></form> --> 
                
                <button id="activate-step-4" class="btn btn-primary btn-md">Activate Step 4</button>
            </div>
        </div>
    </div>



<div class="container">
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1 class="text-center"> STEP 4</h1>
                <button type="submit"></button>
<!--<form></form> -->                
                
            </div>
        </div>
    </div>

</form>
<script type="text/javascript">
    $(document).ready(function() {
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-4').on('click', function(e) {
        $('ul.setup-panel li:eq(3)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
});



     
</script>

  <!--   <script src="js/register.js"></script> -->
        <!-- Intro Content -->

        <hr>
@endsection

