<?php
require_once __DIR__.'/../Func/MySql.php';

class ImageModel
{
    private $id;
    private $name;
    private $views;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($views)
    {
        $this->views = $views;
    }

    function AddImage() {
        $name = $this->getName();
        $pass = $this->getViews();
        $query = "INSERT INTO images (ImageNAME, ImageVIEWS) VALUES ('$name', '$pass')";
        execQuery($query);
    }

    public static function GetAllImages () {
        $query = "SELECT * FROM images";
        $imageList = execQuery($query);
        return $imageList;
    }
}