<!DOCTYPE html>
<html>
<head>
	<title>ธนาคารบ้านหนองคิโมจิ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="index2.php" method="post">
     	<h2>ธนาคารบ้านหนองคิโมจิ</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>

	<form action="home.php" method="post">
	<label>username</label>
    <input type="username" name="username" placeholder="Username"><br>
    

    <label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
    
    <label>Age</label>
    <input type="age" name="age" placeholder="age"><br>

    <label>Telephone number</label>
    <input type="Telephone number" name="Telephone number" placeholder="Telephone number"><br>
    </select><br>

    <button type="submit" formaction="login.php">สมัครสมาชิก</button>
</form>
</body>
</html>
