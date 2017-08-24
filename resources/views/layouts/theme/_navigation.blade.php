
<nav class="navbar navbar-default navbar-fixed-top " role="navigation"  >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  
                <a> <img src="images/logo.png" > </a>
                <div class="spanish">
                      <a href="{{url('home')}}">บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</a>
               </div>
                 <div class="english">
                      <a href="{{url('home')}}">BPIT Holdings Co.,Ltd</a>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li class="spanish">
                        <a href="{{ url('home')}}" >หน้าแรก</a>
                    </li>
                    <li class="english">
                        <a href="{{ url('home')}}" >Home</a>
                    </li>

                    <li class="spanish">
                        <a href="{{ url('company_overview')}}">ประวัติบริษัท</a>
                    </li>
                     <li class="english">
                        <a href="{{ url('company_overview')}}">Company Overview</a>
                    </li>

                    <li class="spanish">
                        <a href="{{url('profile_A.rungnikorn')}}">ประวัติ อ.รุ่งนิกร</a>
                    </li>
                     <li class="english">
                        <a href="{{url('profile_A.rungnikorn')}}">Profile of Ajarn Rungnikorn</a>
                    </li>
                    <!--  <li>
                        <a href="contact.html">ตำแหน่งงาน</a>
                    </li>
                     <li>
                        <a href="{{url('login')}}">ฝากประวัติ</a>
                    </li> -->
                    <li class="dropdown spanish">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">บริการของเรา <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('executive_search')}}">บริการสรรหาพนักงานประจำ</a>
                            </li>
                            <li>
                                <a href="{{url('/staff_outsourcing')}}">บริการเอาท์ซอร์สพนักงานและแรงงาน</a>
                            </li>
                            <li>
                                <a href="{{url('/inhouse_training')}}">บริการจัดฝึกอบรม</a>
                            </li>
                            <li>
                                <a href="{{url('payrolling_service')}}">บริการจัดทำเงินเดือน</a>
                            </li>
                             <li>
                                <a href="{{url('business_consulting')}}">บริการให้คำปรึกษาระบบ HR และธุรกิจ</a>
                            </li>
                            <li>
                                <a href="{{url('accounting')}}">บริการจัดทำบัญชี</a>
                            </li>
                        </ul>
                    </li>
                     <li class="dropdown english">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('executive_search')}}">Recuitment Search</a>
                            </li>
                            <li>
                                <a href="{{url('/staff_outsourcing')}}">Staff & Labor Outsourcing</a>
                            </li>
                            <li>
                                <a href="{{url('/inhouse_training')}}">In-house Training</a>
                            </li>
                            <li>
                                <a href="{{url('payrolling_service')}}">Payrolling Outsourcing</a>
                            </li>
                              <li>
                                <a href="{{url('business_consulting')}}">HR & Business Consulting</a>
                            </li>
                            <li>
                                <a href="{{url('accounting')}}">Accounting Service</a>
                            </li>
                        </ul>
                    </li>
                   <!-- <li>
                        <a href="{{url('activities')}}">กิจกรรมของเรา</a>
                    </li> -->
                    <li class="spanish">
                        <a href="{{url('contact')}}">ติดต่อเรา</a>
                    </li>
                       <li class="english">
                        <a href="{{url('contact')}}">Contact Us</a>
                    </li>
                   
                     <li class="spanish">
                        <a href="{{url('credit')}}">เครดิต</a>
                    </li>
                            <li class="english">
                        <a href="{{url('credit')}}">Credit</a>
                    </li>
            <li><a>Language</a></li>
                     
                        <li style="padding-top: 10px">
             
  <div class="language">

  <select id="select" class="form-control input-md">


        <option id="spanish" value="spanish">Thai</option>
       <option id="english" value="english">English</option>

  </select>
  </div>
                    </li>
                      
   <!--      
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ<span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                
                                 <form class="form" role="form" method="POST" action="" accept-charset="UTF-8" id="login-nav">
                                

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                             <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                              <input id="password" type="password" class="form-control" name="password" required>
                                                    
                                             <div class="help-block text-right"><a href="">ลืมรหัสผ่าน</a></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                                        </div>
                                        
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                ยังไม่เป็นสมาชิก <a href="{{url ('/register')}}"><b>สมัครสมาชิก</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li> -->

                
        

     
       
                </ul>
 
             
             




    

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    



    

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!--  english -->



    

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>