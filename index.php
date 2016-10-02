<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="#">
<title>Login system</title>
</head>

<form action="login.php" method="post">
	<input type="text" name="uid" placeholder="Username" required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit">Log in</button>
</form>

<?php
	if (isset($_SESSION['id'])) {
		echo "You are now logged in which is why you can see this!";
	} else {
		echo "You need to login to see the information on this page";
	}

?>

<br><br><br>

<form action="signup.php" method="post">
	<input type="text" name="first" placeholder="Firstname" required><br>
    <input type="text" name="last" placeholder="Lastname" required><br>
    <input type="text" name="uid" placeholder="Username" required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit">Sign up</button>
</form>

<br><br><br>

<form action="logout.php">
	<button>Log out</button>
</form>

<body>
</body>
</html>