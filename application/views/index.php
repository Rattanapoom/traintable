<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รฟท</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"action=<?php echo site_url('c_train/find') ?> method="Get">
  <!--<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">ต้นทาง</div>
    <div class="col-sm-2">ห้วยราช</div>
    <div class="col-sm-3">ปลายทาง</div>
    <div class="col-sm-1"></div>
  </div>
  <br>
 <div class="row">
    <div class="col-sm-1">ขบวน</div>
    <div class="col-sm-2">สถานี</div>
    <div class="col-sm-1">เวลาออก</div>
    <div class="col-sm-1">เวลาถึง</div>
    <div class="col-sm-1">เวลาออก</div>
    <div class="col-sm-2">สถานี</div>
    <div class="col-sm-1">ถึงเวลา</div>
    <div class="col-sm-1">หมายเหตุ</div>
  </div>
-->

 <table class="table">

    <tr>
      <th scope="col">ขบวน</th>
      <th scope="col">สถานี</th>
      <th scope="col">เวลาออก</th>
      <th scope="col">เวลาถึง</th>
      <th scope="col">เวลาออก</th>
      <th scope="col">สถานี</th>
      <th scope="col">ถึงเวลา</th>
      <th scope="col">หมายเหตุ</th>
    </tr>
 
    
        <?php foreach($ct->result_array() as $rs); {
        ?>
    <tr>
      <td><?php echo $rs['train_id']; ?></td>
      <td><?php echo $rs['s_station']; ?></td>
      <td><?php echo $rs['s_out']; ?></td>
      <td><?php echo $rs['h_in']; ?></td>
      <td><?php echo $rs['h_out']; ?></td>
      <td><?php echo $rs['f_station']; ?></td>
      <td><?php echo $rs['f_in']; ?></td>
      <td><?php echo $rs['type']; ?></td>
     
    </tr>
       

</table>
<a class="btn btn-primary" href="http://localhost/final58/index.php/c_train/formadd" role="button">เพิ่มข้อมูล</a>
  <?php } ?>            
</body>
</html>
