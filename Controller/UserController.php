<?php
session_start();
require __DIR__ . '/../Model/UserModel.php';

class UserController {

    public static function actionGetUser()
    {
        $user = new UserModel();
        $user->setName($_POST['user_name']);
        return $user->getUser();
    }

    public static function actionAddUser()
    {
        $user = new UserModel();
        $user->setName($_POST['user_name']);
        $user->setPassword($_POST['user_password']);
        $user->addUser();
        header('Location: ../index.php');
    }

    public static function actionUserLogout()
    {
        unset($_SESSION['userID']);
        unset($_SESSION['userNAME']);
        unset($_SESSION['userPASSWORD']);
        session_destroy();
        header('Location: ../index.php');
    }

    public static function actionUserLogin() {
        $user = self::actionGetUser();
        if ($user) {
            echo "fasfafafafafafafafafa";
            $_SESSION['user'] = $user->getName();
            setcookie('user', $user->getUserId(), time() + 3600);
            $view = new ViewModel();
            $view->actionRenderView();
        }
        else {
            echo "Пользователь не существует. Зарегистрируйтесь";
            include "../Views/FormRegister.php";
        }
    }
}
