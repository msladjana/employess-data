<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>See all employees</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>All employees</h1>
            <a href="insert.php">add a new employee</a>
            <a href="delete.php">remove employee</a>
            <a href="index.php">cancel</a>
        </div>
        <div class="container2">
            <?php
            include("./inc/results.php");
            ?>
        </div>
    </div>
</body>

</html>