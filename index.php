
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
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Photo Title" required>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit">Upload Photo</button>
        </form>
        <hr>
    

      <!-- <div>   -->
        <h2>Gallery Photos</h2>
        <hr>

        
    

<?php
$photo = $conn->query("SELECT * FROM photos ORDER BY created_at DESC");

if ($photo->num_rows > 0): 
while ($row = $photo->fetch_assoc()): // Fix the while loop syntax
?>
<div>
<h3><?php echo htmlspecialchars($row['title']); ?></h3>
<img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="image" width="220px">
<form action="delete.php" method="POST">
<input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
<button type="submit">Delete Image</button>
</form>
</div>
<?php
endwhile; // Close the while loop properly
else:
echo "No photos uploaded yet!";
endif;
?>


       
    </div>
    
    
</body>
</html>