<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <a href="display_image.php">Link</a>
    <?php
        echo '<img src="images/sample.jpg">'
    ?>
    <a href="display_image.php" target="_blank" title="Sample Image">
        <?php
            echo '<img src="images/sample.jpg">'
        ?>
    </a>
</body>
</body>
</html>