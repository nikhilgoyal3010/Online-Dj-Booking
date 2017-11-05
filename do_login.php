<?php

	include 'connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}
	$u_phone=$_POST['u_phone'];
	$u_pass=$_POST['u_passwor'];
	

	$query="select * from user where u_phone_no=$u_phone";
	$select_query=mysqli_query($connection,$query);


	if(!$select_query)
	{
		die("query failed".mysqli_error($connection));
	}


	while($row=mysqli_fetch_assoc($select_query))
	{
		$db_pass=$row['u_password'];
	}



	if($u_phone=="9646813585" && $u_pass=="admin")
	{
		$_SESSION['logged']=true;
		$_SESSION['user_phone']=$u_phone;
		header("Location: admin.php?flag=0");
		
	}
	elseif ($u_pass==$db_pass) 
	{
		$_SESSION['logged']=true;
		$_SESSION['user_phone']=$u_phone;
		header("Location: user_view.php?flag=0");	
	}
	else
	{
		$_SESSION['logged']=false;
		header("Location: home.php?flag=1");		
	}
?>