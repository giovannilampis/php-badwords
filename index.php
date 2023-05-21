<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>php-badwords</title>
</head>

<body>
    <section class="container text-center" id="php_badwords">

        <h1 class="py-3">
            Find words to censor
        </h1>

        <form action="censorship.php" method="GET">

            <div>

                <label for="">Testo</label>

                <div>
                    <textarea type="text" placeholder="Inserisci il testo da sottoporre a censura" name="textToCensor"
                        class="text_to_censor" required rows="12" cols="50"></textarea>
                </div>


                <label class="mt-4" for="">Parola</label>

                <div>

                    <input type="text" placeholder="Inserisci la parola da bannare" name="wordToBan" required
                        class="mb-4">

                </div>

                <button type="submit">CENSURA TESTO 👮‍♂️</button>

            </div>

        </form>

        <!-- BOOTSTRAP JAVASCRIPT CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    </section>
</body>

</html>