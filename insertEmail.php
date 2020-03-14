<?php
    include_once 'databaseHandler.php';

    $emailAddress = $_POST['emailAddress'];

    $sql = "INSERT INTO preregs (email_address) VALUES ('$emailAddress');";
    mysqli_query($conn, $sql);

    header("Location: SignUp.php?signup=success");
?>