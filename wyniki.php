<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

<!-- STYLESHEET BOOTSTRAP 4 ######################################################################################### -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/wyniki.css">

    <title>Wyniki wyszukiwania</title>
</head>
<body>
    <nav class="container">
        <div class="box">
            <form action="wyszukiwarka.php" action="POST">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Wyszukaj:</span>
                    </div>
                    <input name="wyszukaj" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Co mam wyszukać? :)">
                  </div>
                <input class="btn btn-outline-info" type="submit" value="WYSZUKAJ!">
            </form>
        </div>
    </nav>
    <main class="container">
        <section class="jumbotron">
            <div class="container">
              <img src="img/nalesniki.png" alt="przykładowe zdjęcie">
              <h1 class="display-4">Naleśniki z serem</h1>
              <p class="lead">Naleśniki z serem i z jabłkiem najlepsze na wspólne kolacje rodzinne</p>
              <p class="mark"><a href="">Aby zdobyć przepis kliknij tutaj!</a></p>
            </div>
        </section>
        <section class="jumbotron">
            <div class="container">
                <img src="img/nalesniki.png" alt="przykładowe zdjęcie">
                <h1 class="display-4">Naleśniki z serem</h1> 
                <p class="lead">Naleśniki z serem i z truskwkami najlepsze na wspólne kolacje rodzinne</p>
                <p class="mark"><a href="">Aby zdobyć przepis kliknij tutaj!</a></p>
            </div>
        </section>
        <section class="jumbotron">
                <div class="container">
                    <img src="img/nalesniki.png" alt="przykładowe zdjęcie">
                    <h1 class="display-4">Naleśniki z serem</h1> 
                    <p class="lead">Naleśniki z serem najlepsze na wspólne kolacje rodzinne</p>
                    <p class="mark"><a href="">Aby zdobyć przepis kliknij tutaj!</a></p>
                </div>
            </section>


    </main>











<!-- SCRIPT BOOTSTRAP 4 ########################################################################################### -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>