<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $phrase = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum pariatur quasi dolor architecto iure nulla voluptas similique rem, necessitatibus deleniti temporibus autem? Dignissimos labore odio nisi impedit facere dicta.";
    $phrase_len = strlen($phrase);
    ?>


    <p><?php echo $phrase ?></p>

    <span>La lunghezza di questo paragrafo è uguale a <?php echo $phrase_len ?></span>

</body>

</html>