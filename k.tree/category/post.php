<!DOCTYPE html>
<html>
<head>
<title>Description</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="./css/style.css">
<style>
.content {
  max-width: 1200px;
  margin: auto;
}
</style>
</head>
<body>
<div class="header">
  <h1>Plant A Tree</h1>
  <h3>Online sales platform</h3>
</div>

<div class="navbar">
  <a href="./home.html">Home</a>
  <a href="#" class="active">Shop</a>
  <a href="./about.html">About us</a>
  <a href="#" class="right">Login</a>
</div>

<div class="content">
    
    <?php
	$to = "ailun001kkjoker@gmail.com";
	$subject = $_POST["order"];
	$message = $_POST["address"];
	$from = $_POST["name"];
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
    echo '<h1>Succefull to Buy</h1>';
    echo '<br>';
    echo '<br>';
    echo '<p>Thanks for you purchase</p>';
    echo '<br><br>';
    echo '<p>Contact:tree@mail.com</p>';
    
    ?>
    
</div>



<div class="footer">
    <h3>Plant A Tree, Copyright ? 2019</h3>
</div>
</body>
</html>