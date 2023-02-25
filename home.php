<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $name = $_SESSION['name'];
    $balance = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ฝากเงิน'])) {
            $deposit_amount = floatval($_POST['ฝากเงิน']);
            $balance += $deposit_amount;
        } else if (isset($_POST['ถอนเงิน'])) {
            $withdrawal_amount = floatval($_POST['ถอนเงิน']);
            $balance -= $withdrawal_amount;
            if ($balance < 0) {
                $balance = 0;
            }
        }
    }

    $balance_formatted = number_format($balance, 0);
    $balance_display = str_replace(',', '', $balance_formatted) . " บาท";

    ?>


    <!DOCTYPE html>
    <html>
    <head>
         <title>ธนาคารบ้านหนองคิโมจิ - <?php echo $name; ?></title>
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <h1>ธนาคารบ้านหนองคิโมจิ</h1>
         <h2>บัญชีของคุณ <?php echo $name; ?></h2>
         <h3>ยอดเงินปัจจุบัน : <?php echo $balance_display; ?></h3>
         <form method="post">
            <label for="ฝากเงิน">จำนวนเงินฝาก:</label>
            <input type="number" name="ฝากเงิน">
            <button type="submit">ฝากเงิน</button><br><br>
            <label for="ถอนเงิน">จำนวนเงินที่ถอน:</label>
            <input type="number" name="ถอนเงิน">
            <button type="submit">ถอนเงิน</button><br>
         </form><br>
         <a href="logout.php">ออกจากระบบ</a>
    </body>
    </html>

    <?php 
} else {
     header("Location: index.php");
     exit();
}
?>
