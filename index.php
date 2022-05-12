<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
	<style>
	body {
    background-image: url("");
    background-repeat: no-repeat;
	 background-position: center top;
}
	img
{
	border-radious:20px;
}
input[type=submit]
 {
    width: 100%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover
 {
    background-color: #45a049;
}
</style>
    <!-- Bootstrap Core CSS -->
    <link href="../em1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../em1/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../em2/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../em1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<?php
include('link.php');
if(isset($_POST['submit1']))
{
    $em=$_POST['email'];
    $pa=$_POST['password'];
	if(empty($em))
	{
		$msg="Please enter an Email id";
	}
	else if(empty($pa))
	{
		$msg="Please enter a valid password";
	}	
	else
	{
		if($_POST['email'] != '' && $_POST['password'] != '')
{
$em = $_POST['email'];
$pa = $_POST['password'];
$check_email =($em);
if($check_email)
{
    // email & password combination
    $query = mysql_query("SELECT * FROM event WHERE email = '$em' AND password = '$pa'");
} 
else 
{
    // username & password combination
    $query = mysql_query("SELECT * FROM event WHERE email = '$em' AND password = '$pa'");
}
    $rows = mysql_num_rows($query);
    if($rows > 0)
    {
        //successfull login
        //$_SESSION['email'] = $em;
        $_SESSION['UserDtl'] = $rows;
		header('location:projects-atm-startbootstrap-business-casual-gh-pages/welcome.php');
		} 
		else{
			$msg="Invalid Login Credentials";
		}
}
	}
}
if(isset($_POST['submit2']))
{
	header('location:registration.php');
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
					<center>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqF_b8zFY-BwPI2DAKA0cUQizJV-498C5lK3hMRMjaJrKjiAmF" alt="em" width="330" height="120">
</center>
                        <h3 class="panel-title">PLEASE SIGN IN</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="USERNAME" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="PASSWORD" name="password" type="password" value="">
                                </div>
                                
                                
                                <input type="submit" name="submit1" value="LOGIN"/>
					
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../em1/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../em1/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../em1/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../em2/js/sb-admin-2.js"></script>
	<center><h3><p style="color:red;"><?php
if(isset($msg))
{
	echo $msg;
}
?></p></h3></center>
</body>

</html>