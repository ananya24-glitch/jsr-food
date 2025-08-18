<?php
include 'db.php';

if($_SERVER ["REQUEST_METHOD"] === $_POST){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $time= $_POST['time'];
    $date= $_POST['date'];
    $guest= $_POST['guest'];

    $sql = "INSERT INTO reservation (name, email, phone, time, date, guest) VALUES ('$name', '$email', '$phone', '$time', '$date', '$guest')";

    if ($conn->query($sql)) {
            echo "About added successfully.";
        } else {
            echo "Database error: " . $conn->error;
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
    <a href="aboutpg.php">🖼️ About</a>
    <a href="addabout.php">Add about</a>
    <a href="reservation.php">Reservation</a>
       <a href="reservedata.php">Add booking data</a>
   
</div>
    <div class="content">
        <h2>Add about</h2>
    <form action="" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="text" name="email" required><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" required><br><br>

    <label>Time:</label>
    <input type="text" name="time" required><br><br>

    <label>date:</label>
    <input type="date" name="date" required><br><br>

    <label>Guest:</label>
    <input type="text" name="guest" required><br><br>

    <button type="submit">Add data</button>
</form>

    </div>
</body>
</html>