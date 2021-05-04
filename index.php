<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulář<h1>
    <form action="submit.php" method="post">
    <p>Napište vaše jméno a příjmení:</p>
        <label for="name">Jméno:</label>
        <input type="text" name="Jméno" id="name">
        <br>
        <label for="surname">Příjmení:</label>
        <input type="text" name="Příjmení" id="surname">
        <br>
        <form action="/action_page.php">
  <p>Vyberte vaše pohlaví:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Muž</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Žena</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Nechci uvádět</label>
  <br>
  <p>Napište váš email:</p>
        <label for="email">Email:</label>
        <input type="email" name="Email" id="email">
  <br>
  <br>
  <p>Jaké je jméno vašeho mazlíčka ?</p>
        <label for="name">Jméno:</label>
        <input type="text" name="Jméno" id="name">
        <br>
        <p>Co rádi děláte ?</p>
        <label for="name">Aktivita</label>
        <input type="text" name="Jméno" id="name">
        <br>
        <p>Kolik hodin denně spíte?</p>
        <label for="name">hodiny:</label>
        <input type="text" name="Jméno" id="name">
        <br>
<input type="submit" value="Odeslat">

</body>
</html>