/*Validate###################################*/
$(function() {
  $('#staticParent').on('keydown', '#Personal_ID', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
/*Check#################################*/
$(function (){
	
	
	$('#johnatar').change(function(){
	 
	   var Personal =$('#Personal_ID').val();
	   if (Personal.length <13) {
	   	$('#alert').html("<span style='color:red'>กรุณากรอกหมายเลขบัตรประชาชนให้ครบ 13 หลัก</span>");
	   	 
	   	
	   }else if (Personal.length>13) {
	   	$('#alert').html("<span style='color:red'>กรุณากรอกหมายเลขบัตรประชาชน 13 หลัก</span>");
		 tar++;
	   }else if (Personal.length =13) {
	   	$id =Personal;
	   	$sum =0;
	   	$digi =13;
	   	for ($i=0; $i<12; $i++) {
	   		$sum =$sum +($id[$i])*$digi;
	   		$digi --;
	   	}
	   	$total =(11-($sum%11))%10;
	   	if ($total != $id[12]) {
	   	$('#alert').html("<span style='color:red'>หมายเลขบัตรประชาชนไม่ถูกต้อง</span>");
	  	
	   	}else{
	   		 $.ajax({
     			 url: "check.php",
      			data: "Personal_ID=" + $("#Personal_ID").val(),
     			type: "POST",
 			success: function(data){
 				if (data ==2) {
 		      $('#alert').html("<span style='color:red'>หมายเลขบัตรประชาชนมีอยู่ในระบบอยู่แล้ว</span>");
		
			
 				}else{
 				$('#alert').html("<span style='color:green'>หมายเลขบัตรประชาชนใช้งานได้</span>");
 				
 				}
 			}			
 		    });
	   	}
	   }

	$('#Username').change(function(){
		
		  var Username =$('#Username').val();
		if (Username.length <6) {
		$('#alert1').html("<span style='color:red'>กรุณาชื่อผู้ใช้อย่างน้อย 6 หลัก</span>");
	   	tar++;
		}else{
			 $.ajax({
     			 url: "check.php",
      			data: "Username=" + $("#Username").val(),
     			type: "POST",
 			success: function(data){
 				if (data ==2) {
 		      $('#alert1').html("<span style='color:red'>ชื่อผู้ใช้งานมีอยุ่ในระบบแล้ว</span>");
		tar++;
	
 				}else{
 				$('#alert1').html("<span style='color:green'>ชื่อผู้ใช้งาน</span>");
 			
 				}
 					
 			
 			}			
 		    });

		}
	});
	
		
	
	
	});


	
  
}); /*##############################function###################*/



