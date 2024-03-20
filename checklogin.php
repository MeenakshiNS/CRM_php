<?php
function check_login()
{
if(strlen($_SESSION['email'])==0)
	{	
		$_SESSION["email"]="";
		header("Location:http://localhost/smallcrmnew/smallcrm/crm/index.php");
	}
}
?>