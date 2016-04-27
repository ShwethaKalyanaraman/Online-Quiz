

<html>

<?php
session_start();
if(isset($_POST["submit"]))
{$name=$_POST["Username"];
$password=$_POST['password'];


$user='root';
$pass='';
$db='logindetails';
$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");


$_SESSION['name']=$_POST['Username'];

$query=mysqli_query($db,"insert into logintable values('$name','$password')") or die("No insert query  took place");

if(empty($name)||empty($password))
{
	echo "Enter the details properly";
}
else{
header('location:start.php');
}
}
?>


<head>
             <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

</head>

      <body style="background-repeat:no-repeat;background-image:url('finally.jpg');">
            <div class="modal-dialog">
            	<div class="modal-content">

                         <div class="modal-header">
                                 <h1 class="text-center"><font face="Papyrus">

                                  QUIZ</font>
                                 </h1>

                         </div>
                        
                        <div class="modal-body">
                               <form class="col-md-12 center-block" action="#" METHOD="POST">

                               	<div class="form-group">

                               	<input type="text" name="Username" class="form-control input-lg" placeholder="Username">

                               </div>

                               	<div class="form-group">

                               	<input type="password" name="password" class="form-control input-lg" placeholder="Password">

                               </div>



                                  <div class="form-group">

                               	<input type="submit" name="submit" class="btn btn-block btn-lg btn-primary" value="Login" >
                               	<span class="pull-right"><a href="#">Register</a></span>
                               	<span><a href="#">Forgot Password</a></span>
                               </div>

                              </form>
                              <div class="modal-footer">
                                       <div class="col-md-12">
                                       	<button class="btn">Cancel</button>
                                       </div>
                              </div>

                        </div>
            	</div>

            </div>

       </body>




</html>


