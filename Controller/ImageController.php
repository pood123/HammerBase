<?php

class ImageController {

    function actionShowAllImages() {
        $images = $this->actionGetAllImages();
        $view = new ViewModel($images);
        $view->actionRenderView();
    }

    function actionAddImage() {
        $imageName = $_FILES['userImage']['name'];
        $upload_dir = __DIR__ . "/../Images/" .$imageName;
        move_uploaded_file($_FILES['userImage']['tmp_name'],$upload_dir);
        $image = new ImageModel();
        $image->setName($imageName);
        $image->setViews(0);
        $image->addImage();
    }

    function actionGetAllImages() {
        $imageList = ImageModel::GetAllImages();
        $massImages = array();
        while ($row = mysqli_fetch_object($imageList, "ImageModel")) {
            $massImages[] = $row;
        }
        return $massImages;
    }
}


