<?php

    require_once "connect.php";

    if(isset($_POST['wyszukaj'])){
        require_once('connect.php');

        try{
            $baza = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8',$db_user,$db_password,array(
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ));

                $wyszukaj=$_POST['wyszukaj'];

                $min_wartosc = 1;

                if(strlen($wyszukaj) >= $min_wartosc){
                    $wyszukaj = htmlspecialchars($wyszukaj);
                    $zapytanie = $baza -> prepare("SELECT * FROM przepisy WHERE Nazwa LIKE :wyszukaj");
                    $zapytanie -> bindValue('wyszukaj', $_POST['wyszukaj'],PDO::PARAM_STR);

                    $zapytanie -> execute(array('%'.$wyszukaj.'%'));

                    if($zapytanie ->rowCount()>0)
                    {
                        while($wynik = $zapytanie->fetch())
                        {
                         

                         echo "<section class='jumbotron'>";
                         echo "  <div class='container'>";
                         echo "    <img src=".$wynik['Zdjęcie']." alt='przykładowe zdjęcie'>";
                         echo "    <h1 class='display-4'>".$wynik['Nazwa']."</h1>";
                         echo "    <p class='lead'>Naleśniki z serem i z jabłkiem najlepsze na wspólne kolacje rodzinne</p>";
                         echo "    <p class='mark'><a href=".$wynik['Link'].">Aby zdobyć przepis kliknij tutaj!</a></p>";
                         echo "  </div>";
                         echo "</section>";

                        }
                    } else{
                        echo "<p style='color: white; font-size:24px; text-align: center;'>Nie udało się znaleźć</p>";
                    }
                } else {
                    echo "";
                }

                $baza=null;



            
        } catch(PDOException $err){
            echo "ERROR!: ". $err->getMessage();
        }



    }

?>