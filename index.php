
<?php include './db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery App</title>
</head>
<body>
    <div class="container">
        <h1>Photo Gallery</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Photo Title" required>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit">Upload Photo</button>
        </form>
        <hr>
    </div>

    <div>
        <h2>Gallery Photo</h2>
        <hr>
        <h3></h3>
    </div>
    
    
</body>
</html>