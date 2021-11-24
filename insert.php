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
    <title>Add a new employee</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>add a new employee</h1>

            <form action="insert.php" method="POST">
                <label for="firstName">First name <br>
                    <input type="text" name="firstName"></label><br>
                <label for="lastName">Last name <br>
                    <input type="text" name="lastName"></label><br>
                <label for="profession">Profession <br>
                    <input type="text" name="profession"></label><br>
                <div class="box">
                    <button class="insert" type="submit" name="insert" value="Insert">Add</button>
                    <a class="cancel" href="./index.html">Back</a>
                </div>
            </form>
        </div>


        <div class="message">
            <?php
            require("inc/connect.php");

            if (isset($_POST['insert'])) {
                if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['profession'])) {

                    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['profession'])) {

                        $firstName = trim($_POST['firstName']);
                        $lastName = trim($_POST['lastName']);
                        $profession = trim($_POST['profession']);

                        if ((preg_match("/^[a-zA-z\s]*$/", $firstName))  &&
                            (preg_match("/^[a-zA-z\s]*$/", $lastName))  &&
                            (preg_match("/^[a-zA-z\s]*$/", $profession))
                        ) {

                            $query = "INSERT INTO personnel(firstName, lastName, profession) VALUES ('{$firstName}', '{$lastName}', '{$profession}')";
                            if (mysqli_query($conn, $query) === TRUE) {
                                echo "New employee added";
                            } else {
                                echo "Error!";
                            }
                        } else {
                            echo "You must enter letter values";
                        }
                    } else {
                        echo "All fields must be filled in";
                    }
                }
            }

            ?>

        </div>
    </div>
</body>

</html>