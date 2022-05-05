<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 - Lab 05 - PHP 02</title>
</head>
<body>
    <?php
        $noidung = "";
        $file = @fopen("hoaxuan.txt","r", 1);
        if(!$file){
            echo "Khong the mo duoc file nay <br>";
            exit;
        }
        else{
            while(!@feof($file))
                $noidung .= fgets($file);
            fclose($file);

            $manghoa = explode("/*", $noidung);
            $n = count($manghoa);
            echo "<p align = 'center'><a href='BT02_them_bo_hoa.php'>Thêm bó hoa mới</a></p> 
                <table border = '1' align = 'center' bgcolor='#FF9999' width='700' cellspacing='0'>
                    <tr bgcolor='#FF9999'>
                        <td colspan = '3' align='center'><h2>HOA ĐẸP BỐN MÙA</h2></td>
                    </tr>";

        $t = 0;
        for($i=1; $i < $n; $i++){
            $mang = explode("|", $manghoa[$i]);

            if($t%3 == 0)
                echo "<tr align = 'center'></tr> ";
            $t++;
            echo "<td><b>".$mang[0]."</b></td><br>";
            echo "<i>Gia ban: </i>".number_format($mang[1],0,".", ",")."VND <br>";
            echo "<img src='images/$mang[2]' width = '100px'>";
            echo "</td>";

            if($t % 3 ==0 ) echo "</tr>";
        }

        echo "</table>";
        }

    ?>
</body>
</html>