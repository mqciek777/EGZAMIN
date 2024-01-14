<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header id="header_1">
        <h2>MÓJ ORGANIZER</h2>
    </header>


    <header id="header_2">

        <form method="POST" action="organizer.php">
            Wpis wydarzenia: <input type="text" name="wpis_wydarzenia">
            <input type="submit" value="ZAPISZ" name="wyslij">
        </form>

        <?php
        if(isset($_POST['wyslij'])) {
            $pobrany_wpis = $_POST['wpis_wydarzenia'];
            $polaczenie_1 = mysqli_connect("localhost", "root", "", "egzamin6");

            $zapytanie_1 = "UPDATE zadania SET wpis = '$pobrany_wpis' WHERE dataZadania = '2020-08-27';";
            $wynik_1 = mysqli_query($polaczenie_1, $zapytanie_1);
            
            mysqli_close($polaczenie_1);  
        }
        ?>

    </header>


    <header id="header_3">
        <img src="logo2.png" alt="Mój organizer">
    </header>


    <main>
    <?php
        $polaczenie_2 = mysqli_connect("localhost", "root", "", "egzamin6");

        $zapytanie_2 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien';";
        $wynik_2 = mysqli_query($polaczenie_2, $zapytanie_2);

        while($wiersz_2 = mysqli_fetch_array($wynik_2)) {
            echo "
            <div id='tabelka'>
                <h6>$wiersz_2[0], $wiersz_2[1]</h6>
                <p>$wiersz_2[2]</p>
            </div>
            ";
        };
        
        mysqli_close($polaczenie_2);
    ?>
    </main>


    <footer>

        <?php
        $polaczenie_3 = mysqli_connect("localhost", "root", "", "egzamin6");

        $zapytanie_3 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';";
        $wynik_3 = mysqli_query($polaczenie_3, $zapytanie_3);

        while ($wiersz_3 = mysqli_fetch_array($wynik_3)) {
        
        echo "
            <h1> miesiąc: $wiersz_3[0], rok: $wiersz_3[1] </h1>";
        }

        mysqli_close($polaczenie_3);
        ?>

        <p>Stronę wykonał: 11223344556</p>
    </footer>
    
</body>
</html>