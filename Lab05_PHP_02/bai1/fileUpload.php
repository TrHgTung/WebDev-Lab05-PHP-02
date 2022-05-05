<?php
    if(isset($_POST['submit'])){
        $files = $_FILES['file'];
        //print_r($files);
        $fileName = $files['name'];
        $fileSize = $files['size'];
        $fileTmpLoc = $files['tmp_name'];
        $fileError = $files['error'];

        //chi cho phep file jpg png   bmp jfif tif tiff jpe gif va jpeg

        $f = explode('.',$fileName); //tach ki tu duoi file - file extension (*.abc)
        //print_r($f);
        $fileExt = strtolower($f[1]); //in hoa bien f ==> in hoa duoi file

        $allowedExt = array('jpg','jpeg','png','bmp','jfif','tif','tiff','jpe','gif');
        if(in_array($fileExt, $allowedExt)){
            if($fileSize < 200000){
                $fileNewName = uniqid('TUNG_IMG_',false);  //tao id cho anh dc copy

                $dest = 'images/'.$fileNewName.'.'.$fileExt;
                $moveFile = move_uploaded_file($fileTmpLoc,$dest);
                //header('Location:bai1.php?success=true');

                echo '<b>Các thuộc tính của file Upload:</b>'.'<br><br>';
                echo 'Tên file: '.$fileName.'<br>';
                echo 'Size (dung lượng): '.$fileSize.'<br>';
                echo 'Loại file: Image/'.$fileExt.'<br>';
             //   echo 'Lưu trữ tại: '.$moveFile.'<br>';
                echo 'Lưu trữ tại: '.$fileTmpLoc.'<br>';
                
               // $fileName.$fileSize.'\n'.$fileTmpLoc.'\n'.$fileExt);
            } else {
                echo "File quá dung lượng cho phép, vui lòng quay lại";
            }

        }else{
            echo "File không được hỗ trợ, vui lòng quay lại!";
        }

    }
?>