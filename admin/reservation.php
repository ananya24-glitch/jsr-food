<?php
   include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Reservation</title>
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
      <a href=""></a>
   </div>

   <div class="content">
      <h3>Reservation Table</h3>
      <table class="table table-bordered table-hover bg-white">
         <thead class="table-dark">
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Time</th>
               <th>Date</th>
               <th>Guest</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $result = $conn->query("SELECT * FROM reservation"); 
               while($row = $result->fetch_assoc()){
            ?>
            <tr>
               <td><?= $row['id']; ?></td>
               <td><?= $row['Name'];?></td>
               <td><?= $row['email'] ?></td>
               <td><?= $row['phone'] ?></td>
               <td><?= $row['time'];?></td>
               <td><?= $row['date'];?></td>
               <td><?= $row['guest'];?></td>
               <td>
                  <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">Delete</a>
               </td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</body>
</html>

