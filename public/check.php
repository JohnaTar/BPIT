<?php
	include('connect.php');
	if (isset($_POST['Personal_ID'])) {
		$sql ="SELECT id_card FROM users WHERE id_card ='".$_POST['Personal_ID']."' ";
		$result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo '1';
                exit();
          }else {   
             echo '2';
                exit();
          }
    exit();
  }
  if (isset($_POST['Username'])) {
    $sql ="SELECT username FROM users WHERE username ='".$_POST['Username']."' ";
    $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo '1';
                exit();
          }else {   
             echo '2';
                exit();
          }
    exit();
  }
	
	

?>