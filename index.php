<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome (for the icon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
  body {
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20210115/pngtree-minimal-white-gray-background-with-wavy-lines-image_519877.jpg'); /* Use your image path here */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    min-height: 100vh;
  }
</style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container my-4">
      <!-- Add New Button -->
      <div class="mb-3">
        <a href="create.php" class="btn btn-info d-flex align-items-center rounded-pill" style="width: 200px;">
          <i class="fas fa-user-plus me-2"></i> Add New
        </a>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ACTIONS</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include "connection.php";
            $sql = "select * from crud2";
            $result = $conn->query($sql);
            if(!$result){
              die("Invalid query!");
            }
            while($row=$result->fetch_assoc()){
              echo "
          <tr>
            <th>$row[id]</th>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>
                      <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                      <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
            </td>
          </tr>
          ";
            }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
