<?php
    require_once('nhan.php');
    nhan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container mt-3">
  <h2>Thêm sinh vien</h2>
  </br>
  <form action="" method="post">
  <div class="mb-3">
      <label for="hoten">Họ tên:</label>
      <input type="text" class="form-control" id="hoten" placeholder="Họ tên" name="hoten">
    </div>
    <div class="mb-3 mt-3">
      <label for="User">User name:</label>
      <input type="text" class="form-control" id="Username" placeholder="User name" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="Phone">Phone number:</label>
      <input type="number" class="form-control" placeholder="Phone number" name="phone">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
</div>

</body>

</html>

