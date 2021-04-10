<?php
    include("database.php");

    $notif = 0;
    if (isset($_POST["user"]) && isset($_POST["email"])) {
        $user = $_POST["user"];
        $email = $_POST["email"];
        $loc = "";
        $up = 0;
        if (isset($_POST["location"])) { $loc = $_POST["location"]; }
        if (isset($_POST["emailupdates"])) { $up = 1; }
        
        $sql = "SELECT userID FROM userdata WHERE userID='". $_SESSION['id'] ."'";
        $result = mysqli_query($connection, $sql);
        if ($result && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($user) >= 6) {

            $sql = "UPDATE userdata SET username = '" . $user . "', email = '" . $email . "', location = '" . $loc . "', emailupdates = '" . $up . "' WHERE userID=". $_SESSION['id'] ."";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                $notif = 1;
                $_SESSION["user"] = $user;
                $_SESSION["email"] = $email;
                $_SESSION["location"] = $loc;
                $_SESSION["emailupdates"] = $up;
            }
            else {
                $notif = 3;
            }
        }
        else {
            $notif = 2;
        }
    }

    header("Location: ../account.php?notif=" . $notif);
?>