<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Delete employee</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Remove employees</h1>
            <a href="select.php">See all employees</a>
            <a href="insert.php">Add a new employee</a>
            <a href="index.html">Cancel</a>
        </div>

        <div class="container2">

            <?php
            require("./inc/connect.php");

            $query = "SELECT * FROM personnel";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="result2">
                        <a href="./inc/deleted.php?id=<?php echo $row['id'] ?>"><img src="./img/delete.png"></a>
                        <p><b>Name:</b><?php echo " " . $row['firstName']; ?></p>
                        <p><b>Surname:</b><?php echo " " . $row['lastName']; ?></p>
                        <p><b>Profession:</b><?php echo " " . $row['profession']; ?></p>

                    </div>
                <?php
                }
            } else {
                ?>
                <div class="message"><?php echo "No data!"; ?></div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>