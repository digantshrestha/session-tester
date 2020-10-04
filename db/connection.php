<?php

    function connect(){
        $host = 'host = ec2-3-91-139-25.compute-1.amazonaws.com';
        $port = 'port = 5432';
        $dbname = 'dbname = d7hi5a8h0t3tl4';
        $credentials = 'user = mlwnkmzpvsrnqk password = 2fe5e323ffcf224526b7633e0f5c2ad957261710b7314b50d8f1cdd53a80ec0c';

        $db = pg_connect("$host $port $dbname $credentials");
        return $db;
    }

    function query($db, $sql){
        return pg_query($db, $sql);
    }

    function execute($db, $sql, $args){
        pg_prepare($db, 'crud-query', $sql);
        return pg_execute($db, 'crud-query', $args);
    }

    function fetch_data($result){
        return pg_fetch_assoc($result);
    }

    function close($db){
        pg_close($db);
    }

?>