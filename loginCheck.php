<?php 
	require_once('configuration.php');

	if(isset($_POST['logout']))
	{

	}
	else
	if(isset($_POST['login']))
	{
		if($_POST['login_email']=='a@a.a')
		{
			if($_POST['login_pwd']=='b@b.b')
			{
				session_start();
				echo $_SESSION['auth']='Administrator';
				header('Location:dashboard.php');
			}
		}
	}
	else
	{
		session_destroy();
		header('Location:index.php?msg=failed');
	}
?>