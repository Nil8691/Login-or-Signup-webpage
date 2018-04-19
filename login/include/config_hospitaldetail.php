<?php

if(isset($_POST['adddoctor']))
{
	include_once '../database/database_connection2.php';
	
	$doctorname = mysqli_real_escape_string($conn,$_POST['doctorname']);
	$departmentid = mysqli_real_escape_string($conn,$_POST['departmentid']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	
	if(!empty($doctorname) && !empty($departmentid) && !empty($gender))
	{
		$sql_Query = "SELECT * FROM doctor";
		$stmt = mysqli_query($conn,$sql_Query);
		$result1 = mysqli_num_rows($stmt);
		$result1=$result1+1;
		$query1 = "INSERT INTO doctor values ('$result1','$doctorname','$departmentid','$gender')";
		$stmt1 = mysqli_query($conn,$query1);
		if(!$stmt1)
			{
				//header("Location: ../ds/adddoctor.php?detail=notregister");
				header("Location: ../ds/adddoctor.php?detail=empty");
			}
		else
			{
				//header("Location: ../ds/adddoctor.php?detail=registersuccessfully");
				header("Location: ../ds/adddoctor.php?detail1=empty");
			}
	}
	else
	{
		header("Location: ../ds/adddoctor.php?detail=empty");
		exit();	
	}
}

if(isset($_POST['patient_detail']))
{
	include_once '../database/database_connection2.php';
	
	//$username = mysqli_real_escape_string($conn,$_POST['username']);
	//$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	//if(empty($username) || empty($password))
	//{
		header("Location: ../ds/patient_detail.php?detail=empty");
		exit();
	//}
}
?>