<?php
$con = mysqli_connect("localhost","root","","ap");
if (mysqli_connect_errno($con))
{
die('Could not connect: ' . mysqli_connect_error());
}

$Name = mysqli_real_escape_string($con,$_POST['fname']);
$Password = mysqli_real_escape_string($con,$_POST['password']);

$sql="INSERT INTO member (fname, password)
VALUES
('$Name',
'$Password')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "Record added";

mysqli_close($con);
?>