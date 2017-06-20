<?php
namespace Controller;

$controller = new UserController();
$controller->addUser();
echo <<<HTML
<a href="../Index.php">Вернуться назад и добавить еще</a>
HTML;


class UserController
{
    function addUser(){
        $name = $_POST['user_name'];
        $pass = $_POST['user_password'];
        $conn = new \mysqli('localhost','root','321456', 'HammerBase');
        $query = "INSERT INTO Users (UserNAME, UserPASS) VALUES ('$name', '$pass')";
        if($conn->query($query)) echo "Запись добавлена! <br>";
        else echo "shit <br>";
        $conn->close();
    }
}