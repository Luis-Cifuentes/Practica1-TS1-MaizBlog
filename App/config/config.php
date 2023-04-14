<?php

function retornarConn(){
    $dbhost = 'localhost';
    $dbname = 'ts1maizblog';
    $dbuser = 'root';
    $dbpass = 'nbpjxdxd2';
    $conn = mysqli_connect(
        $dbhost,
        $dbuser,
        $dbpass,
        $dbname
    );
    return $conn;
}

?>