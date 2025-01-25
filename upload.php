<?php
include './db.php';

if ($_SERVER['REQUEST_METHOD']=== "POST"){
    $title1 = $_POST ['title'];
    $title = trim($title1);
    $image = $_FILES ['image'];



    if(isset($image) && $image['tmp_name'] !== ""  && $title !== ""){
    $uploadDir = 'uploads/';
    $fileExtension= pathinfo($image['name'], PATHINFO_EXTENSION);
    $newFileName= time() . '.' . $fileExtension;
    $filePath = $uploadDir . $newFileName;
    // Upload the file
    if(move_uploaded_file($image['tmp_name'], $filePath)){
        // Insert the filepath in DB
        $conn->query("INSERT INTO photos(title, image_path) VALUES('$title', '$filePath')");
        header('Location: index.php');
        exit;
    }else{
        echo "File upload failed";
    }
    
}else{
    echo "Please select a file or give a title";
}
}
?>
<!-- $imageName = $image['name'];
$uploadDir = "uploads/";
$fileExtension = pathinfo($imageName, PATHINFO_EXTENSION);

$newFileName = time() . '.' . $fileExtension;
$filePath = $uploadDir . $newFileName; -->