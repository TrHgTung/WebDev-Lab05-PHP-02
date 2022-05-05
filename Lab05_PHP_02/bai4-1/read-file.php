<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        Bai 4 - Lab 05 - PHP 02
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            h2{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Nội dung của file</h2>

        <?php
            $filename = "sp.txt";
            $file = fopen($filename,"r");

            if($file == false){
                echo "Lỗi khi đọc mở file sp.txt";
            }
            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);


            echo "Tên hàng: &nbsp&nbsp&nbsp  Só lượng: &nbsp&nbsp&nbsp  Đơn giá: &nbsp&nbsp&nbsp  Thành tiền: &nbsp&nbsp <br><br>";
            
            $explodeFiletext = explode("\t", $filetext);
            
            echo $explodeFiletext;



        ?>
    </body>
</html>