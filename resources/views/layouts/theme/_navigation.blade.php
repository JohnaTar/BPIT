<nav class="navbar navbar-default navbar-fixed-top" role="navigation"  >
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
                      <a href="{{url('home')}}">บริษัท บีพีไอที โฮลดิ้งส์ จำกัด</a>
          
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="{{ url('home')}}">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="{{ url('company_overview')}}">ประวัติบริษัท</a>
                    </li>
                    <li>
                        <a href="{{url('profile_A.rungnikorn')}}">ประวัติ อ.รุ่งนิกร</a>
                    </li>
                    <!--  <li>
                        <a href="contact.html">ตำแหน่งงาน</a>
                    </li>
                     <li>
                        <a href="{{url('login')}}">ฝากประวัติ</a>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">บริการของเรา <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('executive_search')}}">บริการสรรหาหัวหน้างาน-ผู้บริหาร</a>
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
                                <a href="{{url('accounting')}}">บริการจัดทำบัญชี</a>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="{{url('contact')}}">ติดต่อเรา</a>
                    </li>
                     <li>
                        <a href="{{url('credit')}}">เครดิต</a>
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