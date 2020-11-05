<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<style>
    input {
        width:150px;        
    }
</style>
<br>
<h1>เพิ่มข้อมูลเวลาเดินรถไฟ</h1>
    <form action=<?php echo site_url('c_train/insert') ?> method="Post">
  <div class="form-group">

    <div class="form-group">
     <br>   
    <label for="train_id">ขบวน</label>
    <input type="text" name="train_id"  rows="1" >
    <br><br><h2>สถานีต้นทาง</h2>
    <label for="s_station">สถานี</label>
    <input type="text" name="s_station" rows="1">
    <label for="s_out">เวลาออก</label>
    <input type="time" name="s_out" rows="1">
    <br><br><h2>สถานีห้วยราช</h2>
    <label for="h_in">เวลาถึง</label>
    <input type="time" name="h_in" rows="1">
    <label for="h_out">เวลาออก</label>
    <input type="time" name="h_out" rows="1">
    <br><br><h2>สถานีปลายทาง</h2>
    <label for="f_station">สถานี</label>
    <input type="text" name="f_station" rows="1">
    <label for="f_in">เวลาถึง</label>
    <input type="time" name="f_in" rows="1">
    <br><br>
    <label for="type">หมายเหตุ</label>
    <dropdown type="text" name="type" rows="1">
  <select class="form-dropdown" name="type" style="width:150px" data-component="dropdown">
            
            <option value="รถธรรมดา"> รถธรรมดา </option>
            <option value="รถดีเซลราง"> รถดีเซลราง </option>
            <option value="รถด่วนดีเซลราง"> รถด่วนดีเซลราง </option>
          </select>
          
  </div><button>
              ตกลง
            </button>
</form>
</body>