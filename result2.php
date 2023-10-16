<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
<table width="1452" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  colspan="9" height="109" background="images/Topbanner.jpg">&nbsp;</td>
    </tr>
    <tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
	<tr>
		
				<td width="10%" align="center" valign="middle">
				<b><?php echo date("Y-m-d");?></b></td>
				<td width="10%" align="center" valign="middle"><a href="index.php" class="a">浏览全部</a></td>
				<td width="10%" align="center" valign="middle"><a href="add_book.php">添加图书</a></td>
				<td width="15%" align="center" valign="middle"><a href="search1.php">精确查询（按图书编号）</a></td>
                                                                <td width="15%" align="center" valign="middle"><a href="search2.php">模糊查询（按图书书名）</a></td>
				<td width="10%" align="center" valign="middle"><a href="searchedit.php">图书信息修改</a></td>
                                                                <td width="10%" align="center" valign="middle"><a href="searchdel.php">图书删除</a></td>
				<td width="10%" align="center" valign="middle"><a href="#">统计</a></td>
				<td width="10%" align="center" valign="middle"><a href="logout.php">退出系统</a></td>
			
	</tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
    <tr>
    	<td  colspan="9" height="10" align="center"><h1>查询图书的结果为：</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>
		
	<?php
		include_once("conn/conn.php");
		$str = "select * from books where bookname like '%".$_POST['bookname']."%'";
		//echo $str;
		$data = mysqli_query($conn,$str);

	?>
		
		
		<table width="1452"  border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
  	
    <td width="10%" align="center" >图书编号</td>
    <td width="20%" align="center" >书名</td>
    <td width="10%" align="center" >价格</td>
    <td width="15%" align="center" >出版单位</td>
    <td width="10%" align="center" >编著</td>
    <td width="10%" align="center" >出版时间</td>
    <td width="10%" align="center" >类别</td>
    <td width="15%" align="center" >操作</td>
  </tr>
<?php
			while($rows = mysqli_fetch_array($data)) {
?>
                    <tr>
    <td width="10%" height="25" align="center" bgcolor="#FFFFFF"><?php echo $rows['bookid'];?></td>
    <td width="20%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['bookname'];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['bookprice'];?></td>
    <td width="15%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['press'];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['writer'];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['presstime'];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows['booktype'];?></td>
	<td width="15%" align="center" bgcolor="#FFFFFF" ><?php echo "<a href=update.php?bookid=".$rows[0].">修改</a>/<a href=delete.php?bookid=".$rows[0].">删除</a>"?></td>
  </tr>
<?php
}
echo "</table><br><a href='search2.php'>重新查询</a>";
?>
			

       
</body>
</html>