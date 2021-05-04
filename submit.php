<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Vyplněná data<h1>
    <?php
    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST, 'surname');
    $radio = filter_input(INPUT_POST, 'radio');
    $email = filter_input(INPUT_POST, 'email');
    $option = filter_input(INPUT_POST, 'option');
    echo "Úspěšně jste se přihlásíl $name <br>";


    if(($name == 'name' ) && ($surname == 'sefzig')) {
        echo "úspěšně jste se přihlásil";
    } else {
        echo "nevyplněné jméno nebo příjmení ";
    }







    ?>














    
</body>
</html>