<?php
 include_once('shared/header.php');

    $username = 'admin';
    $password = 'admin1234';
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $db = connect();
    $sql = 'INSERT INTO loginsystem (username, password) 
            VALUES ($1, $2)';
    $params = [$username, $hashedPassword];
    $result = execute($db, $sql, $params);
    close($db);

 include_once('shared/footer.php');

?>