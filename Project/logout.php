<?php

  // Inialize session
  session_start();
if(isset($_SESSION['name']))
	{

  unset($_SESSION['name']);
  }

 header('Location: login_form.php');

  ?>
  <!DOCTYPE html>
<html>
<head>
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
<body style="background-repeat:no-repeat;background-image:url('spotlight.jpe');">



<button class="button">LOGOUT</button>

</body>
</html>
