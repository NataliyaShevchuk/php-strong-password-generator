<?php 
include_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center m-auto mt-5" style="color: black;">
    La tua password generata: 
        <?php  echo  generatePassword($lengthPassword); ?>
    </h2>
</body>
</html>