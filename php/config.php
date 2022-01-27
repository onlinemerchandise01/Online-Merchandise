<?php

     $servername="localhost";
     $name= "root";
     $password="";
     $dbname="customerdata";


     $conn= mysqli_connect($servername,$name,$password,$dbname);

      if(!$conn){
      	die("connection failed :".mysqli_connect_error());

      }else{
     	//echo "<script>alert('connected to Database')</script>";
      }
?>