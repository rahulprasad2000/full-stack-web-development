<?php
 $hostname="localhost:3307";
 $username="root";
 $password="";
 $database="web";

 $conn = mysqli_connect($hostname, $username, $password, $database);
 if(!$conn){
//      echo "connection successfull";
//  }else{
    //  echo "failed connection". mysqli_connect_error();
    die("Error".mysqli_connect_error());
 }
?>