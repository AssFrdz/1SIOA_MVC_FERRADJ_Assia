<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
</head>
<body>
    <form action="index.php?action=administrer" method="post">
    <?php foreach(getLesSignes() as $lesSignes): ?>
    <label for="<?=$lesSignes['signe']?>" ><?=$lesSignes['signe']?> </label>
    <input type="text" value="<?=$lesSignes['horoscope']?>" name="<?=$lesSignes['signe']?>"> <br>
    <?php endforeach?>
    <input type="submit" value="OK">
    </form>

</body>
</html>