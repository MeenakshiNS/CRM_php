<?php
function check_login()
{
if(strlen($_SESSION['name'])==0)
	{	
		$_SESSION["name"]="";
		header("Location:index.php");
	}
}
?>