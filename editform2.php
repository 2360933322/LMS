<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

<body>
<center>
<?php
include_once("conn/conn.php");//包含数据库连接文件
$sql= "select * from books where bookid = '".$_GET['bookid']."'";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result );
?>
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
				<td width="10%" align="center" valign="middle"><a href="" class="a">浏览全部</a></td>
				<td width="10%" align="center" valign="middle"><a href="add_book.php">添加图书</a></td>
				<td width="15%" align="center" valign="middle"><a href="search1.php">精确查询（按图书编号）</a></td>
                                                                <td width="15%" align="center" valign="middle"><a href="search2.php">模糊查询（按图书书名）</a></td>
				<td width="10%" align="center" valign="middle"><a href="#">图书信息修改</a></td>
                                                                <td width="10%" align="center" valign="middle"><a href="#">图书删除</a></td>
				<td width="10%" align="center" valign="middle"><a href="#">统计</a></td>
				<td width="10%" align="center" valign="middle"><a href="#">退出系统</a></td>
			
	</tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
    <tr>
    	<td  colspan="9" height="10" align="center"><h1>修改图书信息</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>
		<div class='bg'>
		<div class='container'>
			<form method="post" action="finishiedit.php">
				
				<table border="0" style="width:50%;margin:10px auto;" cellspacing="5" cellpadding="3">
					
					<tr>
						<td><label>图书编号:</label></td>
						<td><input type="text" name="b_id" value="<?php echo $rows['bookid'];?>"/></td>
					</tr>
                                                                                
                                                                                <tr>
						<td><label>书名:</label></td>
						<td><input type="text" name="b_name" value="<?php echo $rows['bookname'];?>" /></td>
					</tr>
					<tr>
						<td><label>价格:</label></td>
						<td><input type="number" name="b_price" value="<?php echo $rows['bookprice'];?>" /></td>
					</tr>
                                                                                <tr>
						<td><label>出版社:</label></td>
						<td><input type="text" name="b_press" value="<?php echo $rows['press'];?>" /></td>
					</tr>
                                                                                 <tr>
						<td><label>编著:</label></td>
						<td><input type="text" name="b_writer" value="<?php echo $rows['writer'];?>" /></td>
					</tr>
					<tr>
						<td><label>出版时间:</label></td>
						<td><input type="datetime" name="b_date" value="<?php echo $rows['presstime'];?>" /></td>
					</tr>
					<tr>
						<td><label>类别:</label></td>
						<td>
							<select style="width:50%;height:28px;border-radius:5px 0 5px 0;border:1px solid;" style="height:25px;width:80px;" name="b_type">
								<option <?php if($rows["booktype"]="自然科学") echo "selected";?>>自然科学</option>
								<option <?php if($rows["booktype"]="社会科学") echo "selected";?>>社会科学</option>
								<option <?php if($rows["booktype"]="人文科学") echo "selected";?>>人文科学</option>
								<option <?php if($rows["booktype"]="季刊杂志") echo "selected";?>>季刊杂志</option>
                                                                                                                                <option <?php if($rows["booktype"]="IT") echo "selected";?>>IT</option>
                                                                                                                                <option <?php if($rows["booktype"]="励志") echo "selected";?>>励志</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="submit" value="修改"  style="margin-right:40px;width:60px;height:30px;text-align:cneter;" />
							<input type="submit" value="清除" style="width:60px;height:30px;text-align:cneter;" />
						</td>
					</tr>
				</table>
			</form>
		</div>
		</div>
	</div>
</body>
</html>
</html>