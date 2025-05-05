<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sessions</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="enter username">
        <br />
        <br />
        <button name="button" value="set">Set Session</button>
        <br />
        <br />
        <button name="button" value="get">Get Session</button>
        <br />
        <br />
        <button name="button" value="delete">Delete Session</button>
    </form>
</body>

</html>

<?php
session_start();
if (isset($_POST['button'])) {
    if ($_POST['button'] == 'set') {
        $value = $_POST['user'];
        $_SESSION['user'] = $value;
        echo "Session set successfully";
    }

    if ($_POST['button'] == 'get') {
        if (isset($_SESSION['user'])) {
            echo "session value: " . $_SESSION['user'];
        }
    }

    if ($_POST['button'] == 'delete') {
        if (isset($_SESSION['user'])) {
            session_unset();
            session_destroy();

            echo "session deleted";
        }
    }
}
