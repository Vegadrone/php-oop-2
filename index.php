<?php 
    require_once __DIR__ . '/classes/Accessory.php';
    require_once __DIR__ . '/classes/CreditCard.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Games.php';
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/ShoopingCart.php';
    require_once __DIR__ . '/classes/User.php';

    $food1 = new Food('Canina','Cibo per cani di piccola taglia, alta qualità.', 5.99,'alalala', '1kg', 'dog food', 1, 'small dogs');
    $accessory1 = new Accessory ('Prova', 'Una prova', 150, 'pippo', 'cuccia', '170 cm x 100 cm x 100 cm', 'legno');
    $guestUser = new User('Gino', 'Pino');
    $guestCard = new CreditCard('Gino', 'Pino', 545, '20/05/2024',500);


    var_dump($food1);
    var_dump($accessory1);
    var_dump($guestUser);
    var_dump($guestCard);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop - Animali</title>
</head>
<body>
    
</body>
</html>