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
    <h1>Computer Survey</h1>
    <form id="survey" action="save_post.php" method="post">
        <label form="survey">How old are you </label>
        <input type="number" name="age" form="survey" required>
        <br>
        <label form="survey">What you interesting in</label>
        <select form="survey">
            <option value="Front-End Development">Front-End Development</option>
            <option value="Back-End Development">Back-End Development</option>
            <option value="Data Science">Data Science</option>
            <option value="Cyber Security">Cyber Security</option>
        </select>
        <input type="submit" value="Submit" form="survey">
    </form>
</body>
</html>