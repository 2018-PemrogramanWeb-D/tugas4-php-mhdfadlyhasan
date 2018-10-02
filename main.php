<?php
session_start();
?>

<html>

<?php
date_default_timezone_set("Asia/Bangkok");

function waktu()
{
	if(date("a")=="pm")
	{
		if(date("h")>1&&date("h")<=4)
		{
			echo "afternoon";
		}
		else if (date("h")>4&&date("h")<6)echo "evening";
		
		else echo "night";
	}

	else
	{
		if(date("h")>6&&date("h")<=11)
		{
			echo "morning";
		}
		else if (date("h")>1&&date("h")<6)echo "night";
	}
};


echo "Good ";waktu();echo " Master<br>"."the current time is ".date("h:i:s a");

if($_POST["nama"]=="fadly")
{

	if( $_POST["password"]=="fadly")
	{
		$_SESSION["loginstatus"]=1;
	}
	else
	{
		$_SESSION["loginstatus"]=0;
		header ("Location: wat.php");
		
	}
}
else 
{
	$_SESSION["loginstatus"]=0;
	header ("Location: wat.php");
	
}
?>
</html>