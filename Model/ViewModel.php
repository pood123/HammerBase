<?php
session_start();

class ViewModel {

    private $isUserLogged;
    public $data = array();

    function __construct($data = null)
    {
        if (isset($_SESSION['user'])) {
            $this->isUserLogged = true;
        }
        else {
            $this->isUserLogged = false;
        }
        $this->data = $data;
    }

    function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    function __get($name)
    {
        return $this->data[$name];
    }

    function actionRenderView() {
        $data = $this->data;
        if (!$this->isUserLogged) {
            include __DIR__ . '/../Views/FormHeader.php';
        }
        else {
            include __DIR__ . '/../Views/FormUserLogout.php';
            include __DIR__ . '/../Views/FormImages.php';
        }
    }
}