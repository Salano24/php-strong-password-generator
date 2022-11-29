<?php

$psCharacters = ["a", "b", "c", "d", "e", "f", "A", "B", "C", "D", "E", "F", 1, 2, 3, 4, 5, 6, "!", "?", "$", "%",];

function generatePassword($lenghtPass)
{
    $characters = '.,!=_+*0123456789abcdefABCDEF';
    $charactersLen = strlen($characters);
    $passwordString = '';
    for ($i = 0; $i < $lenghtPass; $i++) {
        $passwordString .= $characters[rand(0, $charactersLen - 1)];
    }
    return $passwordString;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #001632;
    }
    h1{
        color: #7f8a99;
    }
    h3{
        color: #0dcaf0;
    }
  </style>
</head>
<body>
    <h1 class="text-center mt-5">Strong Password Generator</h1>
    <h2 class="text-light text-center">Genera una password sicura</h2>

    <div class="container bg-light p-5">
       <form action="index.php" class="d-flex justify-content-between" method="get">
          <div class="label d-flex flex-column">
            <label class="fw-bold" for="lunghezza">Lunghezza Password:</label>
            <div class="button mt-5">
                <button type="submit" name="create" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          
          </div>
          <div class="input">
            <input type="number" placeholder=" massimo 70 caratteri" name="password" id="password">
           
          </div>

       </form>
    </div>
    <div class="password text-center bg-light p-5 mt-3 container">
        <h1 class="mb-5">La password generata è:</h1>
        <h3>
            <?php
        $passwordCreator = isset($_GET["password"]);
        if ($passwordCreator) {
            echo generatePassword($_GET["password"]);
        }
        ?>
        </h3>
    </div>
</body>
</html>