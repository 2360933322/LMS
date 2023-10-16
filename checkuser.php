<?php
session_start();
include_once("conn/conn.php");//包含数据库连接文件
$sql= "select * from users where username = '".$_POST['username']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){	//判断提交的用户名和密码是否正确
$_SESSION['user']=$_POST['username'];						//如果正确，将其赋给SESSION变量
$_SESSION['pass']=$_POST['password'];
echo "<script>alert('欢迎您的到来!');window.location.href='index.php';</script>";
}else{
	echo "<script>alert('您输入的用户名和密码不正确!');window.location.href='login.php';</script>";
}
?>
