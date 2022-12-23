<?php 
include_once "data.php";


echo  $generatePassword($lengthPassword); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: black;">
        <?php  echo  $generatePassword($lengthPassword); ?>
    </h2>
</body>
</html>