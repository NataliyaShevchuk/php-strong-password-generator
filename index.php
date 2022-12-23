<?php 

include_once "functions.php";
// var_dump($_POST);


// $lengthPassword = $_POST["password"] ?? " ";
// $alphabet = 'abcdefghijklmnopqrstuvwxyz';
// $capitalAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// $numbers = '0123456789';
// $symbols = '!|£$%&/.-@#';

// $generate = str_shuffle($alphabet.$capitalAlphabet.$numbers.$symbols);

// var_dump($generate);
// var_dump($lengthPassword);

// function generatePassword($lengthPassword){
//     $lengthPassword = $_POST["password"] ?? " ";
//     $alphabet = 'abcdefghijklmnopqrstuvwxyz';
//     $capitalAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $numbers = '0123456789';
//     $symbols = '!|£$%&/.-@#';

//     $generate = str_shuffle($alphabet.$capitalAlphabet.$numbers.$symbols);

//     $newPassword = " ";

//     for ($i = 0; $i < $lengthPassword; $i++){
//         $generateRandomPassword = rand(0, strlen($generate) - 1);
//         $newPassword .= $generate[$generateRandomPassword];
//     }
//     return $newPassword;
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php password generator</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body class="">
    <main>
        <div class="container">
            <h1 class="text-center text-white">Strong Password generator</h1>

            <div class="row">
                <div class="bg-white">
                    <form class="form-control" action="password.php" method="POST">
                        <label class="mb-2" for="">Lunghezza caratteri desiderata</label>
                        <input class="form-control" type="number" name="password">
                        <button class="btn btn-primary mt-3" type="submit">Generate</button>
                        <h2>  </h2>
                    </form>
                </div>
            </div>

        </div>
    </main>

</body>
</html>