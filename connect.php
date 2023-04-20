<?php
	$name=$_POST["UserName"];
	$pwd=$_POST["password"];
	$mail=$_POST["email"];
	$ph=$_POST["number"];
	
	// Database connection
	$conn=mysqli_connect('localhost','root','','20761a0505');
	if(!$conn)
	{
		die("Connection Failed:". mysqli_connect_error());
	} 
	else 
	{
		$stmt="insert into registration(UserName,password,email,number)values('$name','$pwd','$mail',$ph)";
		if(mysqli_query($conn,$stmt))
		{
			echo "Registration successfully...";
		}
		else
		{
			echo "Registration Failed...";			
		}
	}
	mysqli_close($conn);
?>