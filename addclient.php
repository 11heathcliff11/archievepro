<?php

header("Location: http://localhost/main.html");

$con = mysqli_connect("localhost","root","","ap");
if (mysqli_connect_errno($con))
{
die('Could not connect: ' . mysqli_connect_error());
}

$Details=null;

$First_Name = mysqli_real_escape_string($con,$_POST['fname']);
$Middle_Name = mysqli_real_escape_string($con,$_POST['mname']);
$Last_Name = mysqli_real_escape_string($con,$_POST['lname']);
$Current_Address = mysqli_real_escape_string($con,$_POST['caddress']);
$Permanent_Address = mysqli_real_escape_string($con,$_POST['paddress']);
$Nationality = mysqli_real_escape_string($con,$_POST['nationality']);
$Occupation = mysqli_real_escape_string($con,$_POST['occupation']);
$Fathers_Name = mysqli_real_escape_string($con,$_POST['father']);
$Mothers_Name = mysqli_real_escape_string($con,$_POST['mother']);
$Martial_Status = mysqli_real_escape_string($con,$_POST['martial']);
$Husbands_Name = mysqli_real_escape_string($con,$_POST['husband']);
$Wifes_Name = mysqli_real_escape_string($con,$_POST['wife']);
$Email_Address = mysqli_real_escape_string($con,$_POST['email']);
$Phone_no = mysqli_real_escape_string($con,$_POST['phone']);
$Details = mysqli_real_escape_string($con,$_POST['details']);

$Respondent_Name = mysqli_real_escape_string($con,$_POST['rname']);
$Respondent_Last_Name = mysqli_real_escape_string($con,$_POST['rlname']);
$Respondents_Father = mysqli_real_escape_string($con,$_POST['rfname']);
$Respondents_Mother = mysqli_real_escape_string($con,$_POST['rmname']);
$Respondents_Address = mysqli_real_escape_string($con,$_POST['radd']);
$Subject = mysqli_real_escape_string($con,$_POST['rsub']);




$sql="INSERT INTO clients (fname, mname, lname, caddress, paddress, nationality, occupation, father, mother, martial, husband, wife, email, phone, details, rname, rlname, rfname, rmname, radd, rsub)
VALUES
('$First_Name',
'$Middle_Name', '$Last_Name', '$Current_Address', '$Permanent_Address', '$Nationality', '$Occupation', '$Fathers_Name', '$Mothers_Name', '$Martial_Status', '$Husbands_Name', '$Wifes_Name', '$Email_Address', '$Phone_no', '$Details', '$Respondent_Name', '$Respondent_Last_Name', '$Respondents_Father', '$Respondents_Mother', '$Respondents_Address', '$Subject')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "Record added";

mysqli_close($con);
?>