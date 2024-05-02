<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp 3 Horoscope</title>
</head>
<body>
<a href="index.php?action=admin">Administrer</a>
<form action="index.php?action=reponse" method="post">
<select name="liste">
<?php foreach($tableau as $cle => $valeur): ?>
        <option value="<?= $valeur?>"><?= $cle?></option>
<?php endforeach?>
</select>
<input type="submit" value="Soumettre">
</form>
</body>
</html>