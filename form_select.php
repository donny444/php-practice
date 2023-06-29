<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save_post.php" method="post">
        ประเภทสินค้า
        <select name="type_id" required>
            <option value="">กรุณาเลือก</option>
            <option value="1">Computer PC</option>
            <option value="2">Computer Notebook</option>
            <option value="3">Smartphone</option>
        </select>
        <br>
        <button type="submit">SAVE</button>
    </form>
</body>
</html>