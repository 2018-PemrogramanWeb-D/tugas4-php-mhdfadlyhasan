<?php
session_start();
?>
<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body> 
    <h1>Insert name</h1>

    <form action="main.php" method="post">
        Name: <input type="text" name="nama" />
        Password: <input type="password" name="password" />

        <input type="submit" />
    </form>
	<?php

	if ($_SESSION["loginstatus"]==0)
	{
		echo "Password atau Username yang anda masukkan salah ";
	}
	?>

</body>
</html>