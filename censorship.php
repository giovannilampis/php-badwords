<?php

$word = $_GET['wordToBan'];

$text = $_GET['textToCensor'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censorship</title>
</head>

<body>

    <h1>

        Censurerò la parola
        <?php echo $word ?> nel testo:

    </h1>

    <p>
        <?php echo $text ?>
    </p>

    <h2>La versione edulcorata del testo inserito, privo della parola vietata 🤨 è:</h2>

    <p>
        <?php echo str_replace($word, '🤡🤡🤡', $text) ?>
    </p>

</body>

</html>