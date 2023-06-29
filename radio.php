<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save_radio.php" method="post">
        <input type="radio" name="payment" value="paypal" required>PayPal
        <br>
        <input type="radio" name="payment" value="credit" checked>Credit Card
        <br>
        <input type="radio" name="payment" value="qr">QR Payment
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>