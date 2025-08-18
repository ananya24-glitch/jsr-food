<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Check if file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        // Move uploaded file to "uploads" folder
        move_uploaded_file($tmp, "uploads/" . $img);

        // Insert into database
        $sql = "INSERT INTO home (image, title, description) VALUES ('$img', '$title', '$description')";
        if ($conn->query($sql)) {
            echo "About added successfully.";
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Please upload a valid image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        body { display: flex; }
        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding: 20px 10px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .sidebar a:hover { background-color: #495057; }
        .content {
            margin-left: 240px;
            padding: 30px;
            width: 100%;
        }
    </style>
</head>
<body class="bg-light">
<div class="sidebar">
    <h4>Admin Panel</h4>
    <a href="index.php">📦 Product List</a>
    <a href="add.php">➕ Add Product</a>
    <a href="aboutpg.php">About</a>
    <a href="addabout.php">Add about</a>
    <a href="reservation.php">Reservation</a>
   
</div>
    <div class="content">
        <h2>Add about</h2>
    <form action="" method="POST" enctype="multipart/form-data">
    <label>Image:</label>
    <input type="file" name="image" required><br><br>

    <label>Title:</label>
    <input type="text" name="title" required><br><br>

    <label>Description:</label>
    <input type="text" name="description" required><br><br>

    <button type="submit">Add About</button>
</form>

    </div>
</body>
</html>
