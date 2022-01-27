<?php


     include 'config.php';
     if(isset($_POST['l_submit'])){
          $l_name= $_POST['l_name'];
          $l_password=$_POST['l_password'];

           $result= mysqli_query($conn,"SELECT * FROM `customerdata` WHERE name='$l_name' And password='$l_password' ");


           if(mysqli_num_rows($result)) {

               session_start();
               $_SESSION['name']=$l_name;
               echo "<script>location.href='cart.php'</script>";
           }else{
                echo "<script>alert('Incorrect name or password !!!')</script>";
                     echo "<script>location.href='login.php'</script>";
           }

     }
?>