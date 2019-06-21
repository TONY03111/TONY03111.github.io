<!DOCTYPE>
<html>
<head>
		<title>社區通</title>
		<meta charset = "utf-8">
	<style type = "text/css">
	body
	{	
		margin:auto;

	}
	#top-header
	{
		max-width: 100%;
		width: 100%;
		background-image:url(pic/p6.jpg);
	}
	a
	{
		font-size : 25;
	}
	
	</style>
	
<body background="pic/bg023.gif">
		<!-- header -->
	<div id = "top-header" >
		<div class = "logo">
			<a href = "test.html"><img src = "image.png" alt = "LOGO" style = "margin-left:10px"></a> <img src = "image3.png" alt = "LOGO" style = "margin-left:350px"/>
		</div>
		<div style = "display:inline-block ; position : absolute ; left :85%; top : 15%;">
			<ul>
				<li  style ="display:inline" >
					<a href="test.html">社區介紹</a>
				</li>
				<li  style ="display:inline">
					<a href="food.html">美食</a>
				</li>
				<li  style ="display:inline">
					<a href="fun.html">玩樂</a>
				</li>
			</ul>
		</div>
	</div> 
</body>
</html>
<?php
	
	require_once ("link.php");
	$food = $_POST['eat'];
	$link = create_connection();
	$sql = "SELECT food_name,food_image,address,storehour FROM food where (food_kind='$food')";
	$result=run_sql($link,"abcd",$sql);
		while($meta=mysqli_fetch_object($result))
	{
			echo "<table border='1' align='center'>";
			echo "<tr><td><strong> 店家名稱: $meta->food_name</strong></td></tr>";
			echo "<tr><td><strong> 地址: $meta->address</strong></td></tr>";
			echo "<tr><td><strong> 營業時間: $meta->storehour</strong></td></tr>";
			echo "<tr><td><img src='$meta->food_image 'width='400' height='400'></td></tr>";
			echo "</table>";
			echo "<br></br>";
			
	}
	mysqli_close($link);

?>
	
	
	
	
	
	
	