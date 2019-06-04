<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

<!-- STYLESHEET BOOTSTRAP 4 ###################################################################### -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Wyszukiwarka</title>
</head>
<body>

<!--################### LOGOTYP ########################  -->
    
    <div class="container">
        <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo strony"></a>
        </div>
    </div>

<!--########################## KATEGORIE #################### -->
<div class="row">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Kategorie:</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="wynikiDaniaPrzekaski.php">Dania i przekąski <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wynikiCiastkaDesery.php">Ciastka i desery</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiLodyNapoje.php">Lody i napoje</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiBazaSkladnikow.php">Baza składników</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="wynikiWege.php">Wege</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiDiety.php">Diety</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiKuchnieSwiata.php">Kuchnie świata</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiDlaDzieci.php">Dla Dzieci</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiPoradyInspiracje.php">Porady i Inspiracje</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="wynikiWszystkie.php">Wszystkie Przepisy</a>
                    </li>
                    
                </div>
        </nav>
    </div>
</div>


<!--########################### WYSZUKIWARKA ###############################################-->
<div class="row">
    <main class="container tlo">
        <div class="wysz">
            <form action="wynikiWszystkie.php" method="POST">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-lg">Wyszukaj:</span>
                    </div>
                    <input name="wyszukaj" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Co mam wyszukać? :)" autocomplete = off>
                  </div>
                <input class="btn btn-outline-info" type="submit" value="WYSZUKAJ!">
            </form>
        </div>
    </main>
</div>

<!-- ######################## TOP DANIA #################################################### -->
<section id="topDnia">
    <div class="row">
        <div class="col-4">
            <div class="box cosSlodkiego">
                <h3>Top dnia</h3>
                <p>Coś słodkiego</p>

            </div>
        </div>

        <div class="col-4">
            <div class="box zupka">
                <h3>Top dnia</h3>
                <p>Zupka</p>
                
            </div>
        </div>

        <div class="col-4">
            <div class="box cosDlaDzieci">
                <h3>Top dnia</h3>
                <p>Coś dla dzieci</p>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="box drugieDanie">
                <h3>Top dnia</h3>
                <p>Drugie Danie</p>

            </div>
        </div>

        <div class="col-4">
            <div class="box cosEgzotycznego">
                <h3>Top dnia</h3>
                <p>Coś egzotycznego</p>

            </div>
        </div>

        <div class="col-4">
            <div class="box wege">
                <h3>Top dnia</h3>
                <p>Wege</p>

            </div>
        </div>
    </div>
</section>

<!-- SCRIPT BOOTSTRAP 4 ########################################################################################### -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>