<?php
ob_start();
$host="db.sice.indiana.edu"; // Host name 
$username="i494f19_vkankari"; // Mysql username 
$password="my+sql=i494f19_vkankari"; // Mysql password 
$db_name="i494f19_vkankari"; // Database name 
$tbl_name="Details"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
echo "Connected to Database<br />";
// Check $username and $password 

if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}


// Define $username and $password as uploaded in the "details" table in burrow
$username=$_POST['username']; 
$password=md5($_POST['password']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
} else {
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>
