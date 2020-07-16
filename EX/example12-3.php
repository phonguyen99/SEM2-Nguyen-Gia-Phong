<?php //setupuser.php
    require_once 'login.php';
    $connection = new mysqli($hn, $un, $pw, $db);

    if ($connection->connect_errno) die("Connect to my sql Error");
    $query = "CREATE TABLE user (
        forename VARCHAR (32) NOT NULL,
        surname VARCHAR (32) NOT NULL,
        username VARCHAR (32) NOT NULL,
        password VARCHAR (125) NOT NULL,
    )";

    $result =  $connection->query($query);
    if (!$result) die("Execute query Error");

    $forename = 'Dang';
    $surname  = 'Thi';
    $username = 'thidk';
    $password = ' 123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($connection, $forename, $surname, $username, $hash);

    $forename = 'Kim';
    $surname = 'Thi';
    $username = 'test';
    $password = '123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($connection, $forename, $surname, $username, $hash);

    function add_user($connection, $fn, $sn, $un, $pw)
    {
        $stmt = $connection->prepare('INSERT INTO user  VALUE (?,?,?,?)');
        $stmt->bind_param('ssss', $fn, $sn, $un, $pw);
        $stmt->excute();
        $stmt->close();
    }
?>