<footer>
            <div class="row spanish">
                <div class="col-lg-1">
                    <a href="{{url('facebook')}}"><i class="fa fa-facebook-square fa-4x"></i></a>
                </div>
                <div class="col-lg-11">

                    <p>สงวนลิขสิทธิ์ © 2017 bpit.co.th <br>
สาขากรุงเทพฯ โทร (02) 4343195-7 แฟกซ์ (02) 435-6469 <br>
สาขาพัทยา โทร (038) 416975-7 แฟกซ์ (038) 416-978 <br>
สาขาชลบุรี (อมตะนคร) โทร (038) 458925-6  แฟกซ์ (038) 458-927 </p>
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
            <!-- english -->
            <div class="row english">
                <div class="col-lg-1">
                    <a href="{{url('facebook')}}"><i class="fa fa-facebook-square fa-4x"></i></a>
                </div>
                <div class="col-lg-11">

                    <p>Copyright © 2017 bpit.co.th All rights reserved.<br>
Bangkok Tel. +66(2) 4343195-7 Fax. +66(2) 435-6469 <br>
Pataya Tel. +66(38) 416975-7 Fax. +66(38) 416-978 <br>
Chonburi (Amata Nakorn Branch)  Tel. +66(38) 458925-6  Fax. +66(38) 458-927 </p>
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

    </div><!--  contrainer -->
   
  <!-- end .flash-message -->
  <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
$(document).ready(function(){


   var languageSelect = document.getElementById('LanguageSelect');
   var selectedLanguage = readCookie('language');
  
  if ((selectedLanguage == 'english') || (selectedLanguage == 'spanish') || (selectedLanguage == 'portuguese')) {
  $(".language select").val(selectedLanguage);
  var sel = $(".language select").val(selectedLanguage);
  if (selectedLanguage == 'english') {
           $(".english").css("display", "inline");
           $(".spanish").css("display", "none"); 
        
        }else if (selectedLanguage =='spanish') {
           $(".english").css("display", "none");
           $(".spanish").css("display", "inline");
       
        }else if (selectedLanguage =='portuguese') {
           $(".english").css("display", "none");
           $(".spanish").css("display", "none");
           $(".portuguese").css("display", "inline");
        }
    } else{
          $(".english").css("display", "none");
           $(".spanish").css("display", "inline");
           $(".portuguese").css("display", "none");
    }

  $(".language select").bind('change', function() {
    //on change set cookie and...
    setCookie('language', this.value, 365);
    
    //change css depending on what is selected
        var sel = $(".language select").val();
        if (sel=='english') {
           $(".english").css("display", "inline");
           $(".spanish").css("display", "none");
           $(".portuguese").css("display", "none");
        }else if (sel=='spanish') {
           $(".english").css("display", "none");
           $(".spanish").css("display", "inline");
           $(".portuguese").css("display", "none"); 
        }else if (sel=='portuguese') {
           $(".english").css("display", "none");
           $(".spanish").css("display", "none");
           $(".portuguese").css("display", "inline"); 
        
        }
        

});

function saveLanguage(cookieValue)
{
    var sel = document.getElementById('LanguageSelect');
    setCookie('language', cookieValue, 365);
}

function setCookie(cookieName, cookieValue, nDays) {
    var today = new Date();
    var expire = new Date();

    if (nDays==null || nDays==0)
        nDays=1;

    expire.setTime(today.getTime() + 3600000*24*nDays);
    document.cookie = cookieName+"="+escape(cookieValue) + ";expires="+expire.toGMTString();
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

});

  </script>
