<?php

include 'db.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $result = $conn->query("SELECT status FROM users WHERE id = $id");

    $row = $result->fetch_assoc();

    if ($row['status'] == 1) {
        $newStatus = 0;
    } else {
        $newStatus = 1;
    }

    $conn->query("UPDATE users SET status = $newStatus WHERE id = $id");

}

header("Location: index.php");
exit();

?>