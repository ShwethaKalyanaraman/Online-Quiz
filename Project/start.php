<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_SESSION['name']))
	{
		echo  "<font color=white> <h1>Welcome ,".$_SESSION['name']."</h1></font>";
}else {
echo "Please log in";

}
?>

<head>
  <script type="text/javascript">
  function next(){
    window.location="Test.html";
  }
  </script>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body style="background-repeat:no-repeat;background-image:url('black.jpg');">
<br>
<br>
<br>
<br>


<center><p><font color="red" size=30>Note:Your time begins as soon as you click START</font></p></center>

<h2> <center><font color="Crimson">CLICK ON THE GREEN BUTTON TO START THE TEST</font> </h2></center>
<center>
<button class="button" onClick="next()">START</button>
</center>
</body>
</html>
