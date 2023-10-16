<?php
header("Content-type:text/html;charset=utf-8"); //设置文件编码格式
include_once("conn/conn.php");//包含数据库连接文件

	if(!($_POST['b_id'] and $_POST['b_name'] and $_POST['b_price'] and  $_POST['b_press'] and $_POST['b_writer'] and $_POST['b_date'] and $_POST['b_type'])){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update books set bookid = '".$_POST['b_id']."', bookname = '".$_POST['b_name']."', bookprice = ".$_POST['b_price'].",press = '".$_POST['b_press']."', writer = '".$_POST['b_writer']."',  presstime = '".$_POST['b_date']."', booktype = '".$_POST['b_type']."' where bookid = '".$_POST['b_id']."'";//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='index.php'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}

?>