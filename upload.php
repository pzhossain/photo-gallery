<?php
include './db.php';

if ($_SERVER['REQUEST_METHOD']=== "post"){
    $title = $_POST ['title'];
    $image = $_POST ['image'];

    if (isset($image) && $image['temp_name'] && $title['title'] !== ""){
        $uploadDirectory = 'uploads/';
        $filePath = $uploadDirectory . basename($image['name']);


        if (move_uploaded_file($image['temp_name'], $filePath)){
            $conn -> query("INSERT INTO photos(title, image_path) VALUES('$title', '$filepath')");
            // header('location: index.php');
            header('Location: index.php');
            exit;
        }else{
            echo "File Upload Failed";
        }
    }else {
        echo "Please select a file first";
    }
}
?>