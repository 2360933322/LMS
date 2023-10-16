<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<link rel="stylesheet" type="text/css" href="mystyle.css">

<body>
	<div class="mm">
	<?PHP
		$b_id = $_POST["b_id"];
		$b_name = $_POST["b_name"];
		$b_price =(float) $_POST["b_price"];
                                $b_press = $_POST["b_press"];
                                $b_writer = $_POST["b_writer"];
		$b_date = $_POST["b_date"];
		$b_type = $_POST["b_type"];
		
		//$sql = "insert into books(bookid,bookname,bookprice,press,writer,presstime,booktype) values('".$b_id."','".$b_name."',".$b_price.",'".$b_press."','".$b_writer."','".$b_date."','".$b_type."')";
                                $sql = "insert into books(bookid,bookname,bookprice,press,writer,presstime,booktype) values('".$b_id."','".$b_name."',".$b_price.",'".$b_press."','".$b_writer."','".$b_date."','".$b_type."')";
		
		include_once("conn/conn.php");
		
		$data = mysqli_query($conn,$sql);
		if($data){
			echo "<b style='color:red;'>图书《{$b_name}》添加成功</b>";
			echo "<br><a href='index.php'>返回主界面</a>";
		}
		else{
			echo "<b style='color:red;'>图书添加出错</b>";
			
			echo "<br><a href='add_book.php'>重新添加</a>";
		}
	?>
	</div>
</body>

</html>