<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Đăng nhập</h2>
        </br>
        <form action="" method="post">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
<?php 
    $re_email=$re_pswd='';
    if(isset($_GET['e'])){
      $re_email=$_GET['e'];
    }
    if(isset($_GET['p'])){
      $re_pswd=$_GET['p'];
    }
    $email=$pswd='';
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['pswd'])){
      $pswd=$_POST['pswd'];
    }
    if($email==$re_email&&$pswd==$re_pswd){
      header('location:chao.php');
      die();
    }
    else if($email!='')
    {
      echo 'ngu vcl';
    }
?>