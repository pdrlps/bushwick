<?php
$con=mysqli_connect("localhost","pedrolo1_anchor","hcmt@45","pedrolo1_8");
$success = true;
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	$success = false;
}

$sql="INSERT INTO subscriptions (name, email, timestamp)
VALUES
('$_POST[name]','$_POST[email]',NOW())";;

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
	$success = false;
}


mysqli_close($con);

if ($success) { 
	header( 'Location: http://pedrolopes.net/thanks' ) ; 
} else {
	header( 'Location: http://pedrolopes.net/error' ) ;
}

?>