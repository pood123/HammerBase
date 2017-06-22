<?php
namespace Model;
require __DIR__. '/../Func/MySql.php';

class ImageModel
{
    private $name;
    private $views;

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

    function addImage() {
        $name = $this->getName();
        $pass = $this->getViews();
        $query = "INSERT INTO images (ImageNAME, ImageVIEWS) VALUES ('$name', '$pass')";
        \Functional\execQuery($query);
    }
}