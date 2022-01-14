<?php

   include 'config.php';

   if(isset($_POST['r_submit'])){
     	$r_name= $_POST['r_name'];
   		$r_email= $_POST['r_email'];
    	$r_phone= $_POST['r_phone'];
    	$r_password= $_POST['r_password'];
    	$r_con_password= $_POST['r_con_password'];
   }



    $mobilePattern="/(\+88)?-?01[1-9]\d{8}/";
    $insert_query= "INSERT INTO `customerdata`( `name`, `email`, `phone`, `password`) VALUES ('$r_name','$r_email','$r_phone','$r_password' )";
      $duplicate_name=mysqli_query($conn,"SELECT * FROM `customerdata` WHERE name='$r_name' ");



    if(strlen($r_name)<3 || strlen($r_name)>20){
    	echo "<script>alert('Name shuld be 3 to 20 character')</script>";
    	echo "<script>location.href='login.php'</script>";

     }elseif(!filter_var($r_email, FILTER_VALIDATE_EMAIL)) {
     
      echo "<script>alert('Invalid email address')</script>";
      echo "<script>location.href='login.php'</script>";  

    }elseif(!preg_match($mobilePattern,$r_phone)){
      echo "<script>alert('Input valid Phone number!')</script>";
      echo "<script>location.href='login.php'</script>";

    }elseif($r_password!=$r_con_password){
        echo "<script>alert('Input valid password')</script>";
        echo "<script>location.href='login.php'</script>";

      }elseif(mysqli_num_rows($duplicate_name)>0){
      	echo "<script>alert('Username already taken')</script>";
        echo "<script>location.href='login.php'</script>";

      }else{
      	if(!mysqli_query($conn,$insert_query)){
      		 echo "<script>alert('Not Inserted!!')</script>";

      	}else{
      		 echo "<script>alert('Successfully inserted !!')</script>";
        echo "<script>location.href='login.php'</script>";
      	}
      }
  


?>