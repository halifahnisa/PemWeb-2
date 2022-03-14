<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_pop($tim);

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
</body>
</html>