<?php

if(isset($_POST['login_session']))
{
	include_once '../database/database_connection.php';
	
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	if(empty($username) || empty($password))
	{
		header("Location: ../login.php?login=empty");
		exit();
	}
	else
	{
		$sql1 = "SELECT * FROM signup WHERE username='$username' OR email = '$username'";
		$stmt = mysqli_query($conn,$sql1);
		if(!$stmt)
		{
			header("Location: ../login.php?login=not connected");
			exit();
		}
		$result = mysqli_num_rows($stmt);
		if($result < 1)
		{
			header("Location: ../login.php?login=DataNotavailable");
			exit();
		}
		else
		{
			if($rows = mysqli_fetch_assoc($stmt))
			
			{   //De-hashing password.
				$dehashpassword = password_verify($password, $rows['password']);
				if($dehashpassword == true)
				{
					header("Location: https://www.google.com");
					exit();
				}
				elseif($dehashpassword == false)
				{
					header("Location: ../login.php?login=invalid%data");
					exit();
				}
			}	
		}
	}
	
}
else
{
	header("Location: ../login.php");
}


if(isset($_POST['register']))
{
	//Database Connection
	include_once '../database/database_connection.php';
	
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	
	//Check for Empty value
	if(empty($username) || empty($email) || empty($password))
	{
		header("Location: ../login.php?signup=empty");
		exit();
	}
	else
	{
		if( !preg_match("/[a-zA-Z0-9]/", $username) || !preg_match("/[a-zA-Z0-9]/", $password))
		{
			header("Location: ../login.php?signup=invalidvalue");
		    exit();
		}
		else
		{
			//Email check
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../login.php?signup=invalid_email");
		        exit();
			}
			else
			{
				$sql_Query = "SELECT * FROM signup where username= '$username' OR email='$email'";
				$stmt = mysqli_query($conn,$sql_Query);
				$result = mysqli_num_rows($stmt);
				
				if($result > 0)
				{
					header("Location: ../login.php?signup=usertaken");
		        	exit();
				}
				else
				{
					$sql_Query = "SELECT * FROM signup";
					$stmt = mysqli_query($conn,$sql_Query);
					$result1 = mysqli_num_rows($stmt);
					$result1=$result1+1;
					$hashpassword = password_hash($password, PASSWORD_DEFAULT);
					$sql = "Insert into signup values ('$result1', '$username', '$email', '$hashpassword')";
					$stmt = mysqli_query($conn,$sql);
					if(!$stmt)
					{
						header("Location: ../login.php?signup=failretry");
		        	    exit();
					}
					else
					{
						header("Location: ../login.php?signup=successful");
		        	    exit();
					}
				}
			}
		}
	}
}
else
{
	header("Location: ../login.php");
	exit();
}
