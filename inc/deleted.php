<?php
require("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM personnel WHERE id = {$id}";
    mysqli_query($conn, $query);
    header("Location: ../delete.php");
    exit();
}
?>