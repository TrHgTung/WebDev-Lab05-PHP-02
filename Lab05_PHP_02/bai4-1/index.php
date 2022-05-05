<!DOCTYPE html>
<html>
<head>
  <title>Bai 4 - Lab 05 - PHP 02</title>
  <style>
      form{
          text-align: center;
      }
  </style>
</head>
<body>
  <form method="post">
  <h2>TẠO - GHI - ĐỌC FILE CÓ ĐỊNH DẠNG</h2>
<br>
    Tên file: <input type="text" name="ten-file"><br>
    Tên hàng: <input type="text" name="ten-hang"><br>
    Số lượng: <input type="text" name="so-luong"><br>
    Đơn giá: <input type="text" name="don-gia"><br><br><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
              
    /*if(isset($_POST['ten-file']))
    {
        $data=$_POST['ten-file'];
        $fp = fopen('sp.txt', 'a');
        fwrite($fp, $data);
        fclose($fp);
    }*/

    if(isset($_POST['ten-file']) || isset($_POST['ten-hang']) || isset($_POST['so-luong']) || isset($_POST['don-gia']))
    {
        //$data=$_POST['ten-file'];
        $data0 = $_POST["ten-file"];
        $data1 = $_POST["ten-hang"];
        $data2 = $_POST["so-luong"];
        $data3 = $_POST["don-gia"];
        $fp = fopen('sp.txt', 'a');
        fwrite($fp, $data0);
        fwrite($fp, $data1);
        fwrite($fp, $data2);
        fwrite($fp, $data3);

        header('Location: success-noti.php');


        fclose($fp);


    }


?>