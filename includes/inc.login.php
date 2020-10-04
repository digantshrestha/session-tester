<?php
    session_start();
    include_once($_SERVER['DOCUMENT_ROOT'].'/db/connection.php');

    if(isset($_POST['login'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $db = connect();

        $sql = 'SELECT * FROM loginsystem';

        $result = query($db, $sql);
        $datas = fetch_data($result);
        close($db);
        
        $db_username = $datas['username'];
        $db_password = $datas['password'];
        
        if($username !== $db_username){
            header('Location: ../?error=nouserfound');
            exit();
        }
        else{
            $pwdCheck = password_verify($password, $db_password);

            if($pwdCheck == false){
                header('Location: ../?error=wrongpassword');
                exit();
            }
            else{
                $_SESSION['username'] = $username;
                header('Location: ../');
            }
        }
    }

?>