<DOCTYPE html>
<html>
<title>Signup</title>
<head>
<style>
img {
    border-radius: 1px;
}
body
{
background-color:lightgreen;
}
input[type=text], select {
    width: 20%;
    padding: 5px 12px;
    margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 20%;
    padding: 5px 12px;
    margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]
 {
    width: 10%;
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
div
{
    border-radius: 20px;
    background-color: white;
    padding: 20px;
	}
</style>
<?php
include_once('link.php');

if(isset($_POST['submit1']))
{
	$em=$_POST['e_mail'];
	$pas=$_POST['password'];
	
	mysql_query("insert into logindetails(username,password) VALUES('$em','$pas')");

}
?>
<DOCTYPE html>
<html>
<body>
<form action="" method="post">
<center>
Username*
<input type="text" name="e_mail" value=""/><br />
Password*
<input type="password" name="password" value=""/><br />
<input type="submit" name="submit1" value="submit" /> </center>
</form>
</body>
</html>