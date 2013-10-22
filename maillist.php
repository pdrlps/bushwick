<?php
header("Content-type: text");
header("Pragma: no-cache");
header("Expires: 0");

if ($_GET[key] == 'KEY') {
	$con = mysqli_connect("localhost","pedrolo1_anchor","hcmt@45","pedrolo1_8");

	if (mysqli_connect_errno())
	{
		header( 'Location: http://pedrolopes.net/error' ) ;
	}

	$result = mysqli_query($con,"SELECT * FROM subscriptions");
	echo "id,name,email,timestamp\n";
	while($row = mysqli_fetch_array($result))
	{
		echo $row['id'] . ',"' . $row['name'] . '","' . $row['email'] . '","' . $row['timestamp'] . '"';
		echo "\n";
	}

	mysqli_close($con);
} else {
	header( 'Location: http://pedrolopes.net/error' ) ;
}
?>