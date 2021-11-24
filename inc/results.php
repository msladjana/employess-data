<?php
require("connect.php");

$query = "SELECT * FROM personnel";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="result">
            <p><b>Name:</b><?php echo " " . $row['firstName']; ?></p>
            <p><b>Surname:</b><?php echo " " . $row['lastName']; ?></p>
            <p><b>Profession:</b><?php echo " " . $row['profession']; ?></p>
        </div>
    <?php
    }
    ?>
    <div class="message2"><?php echo "Total number of employees: " . mysqli_num_rows($result); ?></div>
<?php
} else {
?>
    <div class="message2"><?php echo "No records"; ?></div>
<?php
}
?>