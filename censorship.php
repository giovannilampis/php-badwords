<?php

$word = $_GET['wordToBan'];

$text = $_GET['textToCensor'];

$textWithoutSpaces = str_replace(' ', '', $text);

$numberCharacters = strlen($textWithoutSpaces);

$censoredText = str_replace($word, '🤡🤡🤡', $text);

$censoredTextWithoutSpaces = str_replace(' ', '', $censoredText);

$numberCharactersCensoredText = strlen($censoredTextWithoutSpaces);

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

    <h2>
        <?php echo $text ?>
    </h2>

    <h3>
        Il testo inserito contiene un numero di caratteri pari a
        <?php echo $numberCharacters ?>
    </h3>

    <h1>La versione edulcorata del testo inserito, privo della parola vietata 🤨 è:</h1>

    <h2>
        <?php echo $censoredText ?>.
    </h2>

    <h3>
        Il testo censurato ha un numero di caratteri pari a
        <?php echo $numberCharactersCensoredText ?>
    </h3>

</body>

</html>