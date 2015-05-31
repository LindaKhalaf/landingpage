<?php
    require_once(__DIR__ . "/../model/config.php");

    $email   = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $subject   = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
    $info   = filter_input(INPUT_POST, "info", FILTER_SANITIZE_STRING);
   
    // $salt = "$5$5" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

    // // use to create encripted password
    // $hashedPassword = crypt($password, $salt);

    $query = $_SESSION["connection"]->query("INSERT INTO contact_me SET "
           .  "email = '$email',"
           .  "subject = '$subject',"
           .  "info = '$info'");

    if ($query) {
        // echo "Successfully created users: $username";
                header("Location: " .$path . "thankyou.php");


    }
    else {
         echo "<p>" . $_SESSION["connection"]->error. "</p>";
    }




