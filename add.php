<?php
session_start();
require("db_conn.php");

if (isset($_POST["username"])) {
    $name = $_POST["username"];    
    $password = $_POST["password"];    

    $user_check = "SELECT * FROM user WHERE name = '$name' LIMIT 1";
    $result = mysqli_query($conn, $user_check);
    $user = mysqli_fetch_assoc($result);
    if ($user['name'] === $name){
        echo "<script>alert('มีบัญชีผู้ใช้งานนี้แล้ว');</script>";
    } else{
        $passwordnew = md5($password);
        $query = "INSERT INTO user (name, password, userlevel) VALUES ('$name', '$passwordnew', 'm')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว";
            header("Location: index.php");
        } else {
            $_SESSION['error'] = "มีบัญชีผู้ใช้งานนี้แล้ว";
            header("Location: index.php");
        }
    }    
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ธนาคารบ้านหนองคิโมจิ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="add.php" method="post">
        <h2>ธนาคารบ้านหนองคิโมจิ</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>Username</label>
        <input type="text" name="username" placeholder="Username"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Balance</label>
        <input type="text" name="balance" placeholder="Balance"><br>

        <button type="submit">สมัครสมาชิก</button>
    </form>
</body>
</html>
