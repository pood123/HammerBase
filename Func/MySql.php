<?php
namespace Functional;

define("HOST", "localhost");
define("USER", "root");
define("PASS", "321456");
define("DBASE", "HammerBase");


/*function getConnection() {
    $conn = mysqli_connect(HOST,USER,PASS,DBASE);
}*/

function execQuery($query) {
    $conn = mysqli_connect(HOST,USER,PASS,DBASE);
    if ($conn->query($query)) echo "запись добавлена";
    else echo "запись не добавлена";
}