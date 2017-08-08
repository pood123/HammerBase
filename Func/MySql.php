<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "321456");
define("DBASE", "HammerBase");

function execQuery($query) {
    $conn = mysqli_connect(HOST,USER,PASS,DBASE);
    $result = $conn->query($query);
    return $result;
}