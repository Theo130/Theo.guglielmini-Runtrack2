<?php

header("content-type:image/png");
   $x=1024;
   $y=768;
   $img = imagecreatetruecolor($x,$y);
   $blanc = imagecolorallocate($img,255,255,255);
   $ros = imagecolorallocate($img,255,0,100);
   imagefill($img,0,0,$blanc);
   imagerectangle($img,25,25,$x/2-10,$y-500,$rose);
   
   imagepng($img);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</br></br></br>
</body>
</html>
http://localhost/runtrack2/jour02/job06/index.php