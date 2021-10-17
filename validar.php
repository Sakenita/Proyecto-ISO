<?php
session_start();
error_reporting(0);
include('dba/dbconn.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"SELECT ID from admin where  username='$username' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
     header('location:dashboard.php');
    }
    else{
    $msg="Error de autenticación";
    }
  }
?>