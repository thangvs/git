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
    <div class="container-fluid">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full name</th>
      <th scope="col">User name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $connect = new mysqli("localhost","root","","dssinhvien");
        mysqli_set_charset($connect,"utf8");
        $query ="SELECT * from sinhvien ";
        $result =mysqli_query($connect,$query);
        $data=array();
        while($row=mysqli_fetch_array($result,1)){
            $data[]=$row;
        }
        $connect->close();

        //hiển thị ra
        for($i=0;$i<count($data);$i++){
            echo' <tr>
            <td scope="col">'.($i+1).'</td>
            <td scope="col">'.$data[$i]['full_name'].'</td>
            <td scope="col">'.$data[$i]['user_name'].'</td>
            <td scope="col">'.$data[$i]['pwd'].'</td>
            <td scope="col">'.$data[$i]['email'].'</td>
            <td scope="col">'.$data[$i]['phone'].'</td>
          </tr>';
        }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>