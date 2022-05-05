<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3 - Lab 05 - PHP 02</title>
    <style>
        .gallery{
            display: grid;
            grid-template-columns: repeat(3,auto);
            max-width: 1000px;
        }
        .gallery img{
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>

</head>
<body>
    
    <div class="gallery">
    <?php
        //require_once("gallery.css");

        $images = glob("gallery/flowers/*.{jpg,jpeg,png,bmp,gif,webp}", GLOB_BRACE);  //change-path
        //sort($images);  // xep tu be --> lon
        foreach($images as $i){
            printf("<img src='gallery/flowers/%s' />",          //change-path
                basename($i)
            );
        }

        //print_r($images);



    ?>
</div>



</body>
</html>


