<?php
$pdo = require 'Connection.php';

try {
    $sql = 'insert into users(Name,Username, Password)
        values(:Name,:Username,:Password)';

    $statement = $pdo->prepare($sql);

    $author = [
        'Name' => 'Name',
        'Username' => 'Chris',
        'Password' => 'Abani',
    ];

    $statement->bindParam(':Name', $author['Name']);
    $statement->bindParam(':Username', $author['Username']);
    $statement->bindParam(':Password', $author['Password']);

    // change the author variable
    $author['Name'] = $_POST['Name'];
    $author['Username'] = $_POST['Username'];
    $author['Password'] = md5($_POST['Password']);

    // execute the query with value Tom Abate
    $statement->execute();
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/");
    exit;
} catch (PDOException $e) {
    die($e);
}
