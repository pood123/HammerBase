<?php
namespace Controller;
use Model\ImageModel;
require __DIR__.'/../Model/ImageModel.php';

if ($_POST['addImage'] && !empty($_FILES['userImage'])) addFoto();

function addFoto() {
    $imageName = $_FILES['userImage']['name'];
    $upload_dir = __DIR__."/../Images/".$imageName;
    move_uploaded_file($_FILES['userImage']['tmp_name'],$upload_dir);
    $image = new ImageModel();
    $image->setName($imageName);
    $image->setViews(0);
    $image->addImage();
}

function removeFoto() {}


