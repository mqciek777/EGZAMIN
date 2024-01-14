<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="header_1">
        <img src="logo1.png" alt="Mój kalendarz">
    </header>


    <header id="header_2">
        <h1>KALENDARZ</h1>
        
        <?php
        $polaczenie_1 = mysqli_connect("localhost", "root", "", "egzamin5");

        $zapytanie_1 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
        $wynik_1 = mysqli_query($polaczenie_1, $zapytanie_1);

        while($wiersz_1 = mysqli_fetch_array($wynik_1)) {
            echo "
            <h3>Miesiąc: $wiersz_1[0], rok: $wiersz_1[1]</h3>
            ";
        };

        mysqli_close($polaczenie_1);
        ?>
    </header>


    <main>
    <?php
        $polaczenie_2 = mysqli_connect("localhost", "root", "", "egzamin5");

        $zapytanie_2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        $wynik_2 = mysqli_query($polaczenie_2, $zapytanie_2);

        while($wiersz_2 = mysqli_fetch_array($wynik_2)) {
            echo "
            <div id='blok'>
                <h5>$wiersz_2[0]</h5>
                <p>$wiersz_2[1]</p>
            </div>
            ";
        };

        mysqli_close($polaczenie_2);
        ?>
    </main>


    <footer>
        <form method="post" action="kalendarz.php">
            Dodaj wpis: <input type="text" name="dodaj_wpis">
            <input type="submit" value="DODAJ" name="dodaj">
        </form>

        <p>Stronę wykonał: 11223344556</p>

        <?php
        if (isset($_POST['dodaj_wpis'])) {
            $pobrany_formularz = $_POST['dodaj_wpis'];
            $polaczenie_3 = mysqli_connect("localhost", "root", "", "egzamin5");

            $zapytanie_3 = "UPDATE zadania SET wpis = '$pobrany_formularz' WHERE dataZadania = '2020-07-13';";
            $wynik_3 = mysqli_query($polaczenie_3, $zapytanie_3);

            mysqli_close($polaczenie_3);
        };

                  
        ?>
    </footer>
    
</body>
</html>