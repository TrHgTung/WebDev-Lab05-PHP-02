<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 - Lab 05 - PHP 02</title>
</head>
<body>
<!-- <p align="center">Kết quả </p>
<img src='$imagePath'><br>
    Tên bó hoa: <b>$tenhoa</b><br>
    Giá bán: <b>$giaban VNĐ</b><br>
<a href='BT02_doc_bo_hoa.php'><b>Xem các bó hoa</b></a> -->
<?php
    if(isset($_POST['ten_hoa']) && isset($_POST['gia_ban']) ){
        if(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") && ($_FILES["file"]["size"] < 200000) ){   //hinh anh trong /image/...
            if($_FILES["file"]["error"] > 0)
                echo "Return code: ".$_FILES["file"]["error"]."<br>";
            else{
                move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);      // tao 1 folder "images"
                $imagePath = "images/".$_FILES["file"]["name"];
            }
        }
        else{
            exit("File khong hop le!");
        }
        $tenhoa = $_POST["ten_hoa"];
        $giaban = $_POST["gia_ban"];
        $hinhanh = $_FILES["file"]["name"];

        $noidung = "/*".$tenhoa."|".$giaban."|".$hinhanh;

        $file = fopen("hoaxuan.txt","a",1); //
        fwrite($file, $noidung);
        echo "<p align = 'center'><b>Đã ghi file thành công</b></p> ";
        fclose($file);

        $giaban = number_format($giaban, 0, ".", ",");
        echo "<p align = 'center'>Kết quả: <br>
            <img src='$imagePath'><br>
            Tên bó hoa: <b>$tenhoa</b><br>
            Giá bán: <b>$giaban VNĐ</b><br>
            <a href = 'BT02_doc_bo_hoa.php'><b>Xem các bó hoa</b></a>";
         
    }
    else{
        echo "<p align='center'>Hãy nhập đầy đủ các thông tin </p>";
    }

?>
</body>
</html>
