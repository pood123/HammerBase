<?php
require_once __DIR__.'/../Controller/UserController.php';

if (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['login'])) {
    UserController::actionUserLogin();
} elseif (isset($_COOKIE['user']) && (isset($_POST['logout']))) {
    UserController::actionUserLogout();
} elseif (isset($_POST['user_name']) && isset($_POST['user_password']) && isset($_POST['register'])) {
    UserController::actionAddUser();
}

