<footer>
            <div class="row">
                <div class="col-lg-1">
                    <a href="{{url('facebook')}}"><i class="fa fa-facebook-square fa-4x"></i></a>
                </div>
                <div class="col-lg-11">

                    <p>สงวนลิขสิทธิ์ © 2017 bpit.co.th <br>
สาขากรุงเทพฯ โทร (02) 4343195-7 แฟกซ์ (02) 435-6469 <br>
สาขาพัทยา โทร (038) 416975-7 แฟกซ์ (038) 416-978 <br>
สาขาชลบุรี(อมตะนคร) โทร (038) 458925-6  แฟกซ์ (038) 458-927 </p>
<a href="http://www.histats.com" target="_blank" title="web log free" >
<script  type="text/javascript" language="javascript">
var s_sid = 861474;var st_dominio = 4;
var cimg = 107;var cwi =170;var che =20;
</script>
</a>
<script  type="text/javascript" language="javascript" src="http://s10.histats.com/js9.js">
  
</script>
<noscript><a href="http://www.histats.com" target="_blank">
<img  src="http://s4.histats.com/stats/0.gif?861474&1" alt="web log free" border="0"></a>
</noscript>

                </div>
                
            </div>
        </footer>

    </div>
   <!-- start .flash-message -->
<div class="flash-message" id="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }} alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('alert-' . $msg) }}</div>
     
      @endif
    @endforeach
  </div>
  <!-- end .flash-message -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
