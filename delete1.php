<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
include_once("conn/conn.php");//连接数据库
if($_POST['bookid'] )	        //判断用户是否提交了要删除的图书编号
    {//拼接、生成删除操作命令字符串
$sql = "delete from books where bookid = '".$_POST['bookid']."'";
	 $result = mysqli_query($conn,$sql);               //执行删除操作
	 if($result)
	     {echo "图书编号为".$_POST['bookid']."的数据记录已删除成功<a href='index.php'>点击这里返回首页</a>";}
          else{echo "删除失败";	}
     }
else
    {echo "<a href='searchdel.php'>请输入要删除的图书编号</a>";}
?>
