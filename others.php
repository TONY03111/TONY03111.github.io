<!DOCTYPE>
<html>
<head>
		<title>社區通</title>
		<meta charset = "utf-8">
	<script src="ajax.js"></script>
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
	
<body background="pic/bg209.gif">
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
	$others = $_POST["others"];
	$link = create_connection();
	$sql = "SELECT place_name,place_image,address FROM play where (place_kind='$others')";
	$result=run_sql($link,"abcd",$sql);
	$num_rows = mysqli_num_rows($result);
	
	while($meta=mysqli_fetch_object($result))
	{
			echo "<table border='1' align='center'>";
			echo "<tr><td><strong> 地點: $meta->place_name</strong></td></tr>";
			echo "<tr><td><strong> 地址: $meta->address</strong></td></tr>";
			echo "<tr><td><img src='$meta->place_image' width='400' height='400'></td></tr>";
			echo "</table>";
			echo "<br></br>";
			
	}
	mysqli_close($link);

?>
	