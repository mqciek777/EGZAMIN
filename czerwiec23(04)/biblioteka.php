<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Biblioteka w Książkowicach Wielkich</h1>    
    </header>    


    <section id="lewy">
        <h3>Polecamy dzieła autorów: </h3>

        <ol>

        <?php
            $polaczenie_1 = mysqli_connect("localhost", "root", "", "biblioteka");

            $zapytanie_1 = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko ASC";
            $wynik_1 = mysqli_query($polaczenie_1, $zapytanie_1);

            while($wiersz_1 = mysqli_fetch_array($wynik_1)) {
                echo "
                <div id='lista'>
                
                    <li>$wiersz_1[0] $wiersz_1[1]</li>
                
                </div>
                ";
            }

            mysqli_close($polaczenie_1);
        ?>

        </ol>
    </section>


    <section id="srodkowy">
        <h3>ul. Czytelnicza 25, Książkowice&nbspWielkie</h3>

        <p> 
            <a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a> 
        </p>
        
        <img src="biblioteka.png" alt="książki">
    </section>


    <section id="prawy_gorny">
        <h3>Dodaj czytelnika</h3>

        <form method="POST" action="biblioteka.php">
            Imię: <input type="text" name="imie" id="imie"> <br>
            Nazwisko: <input type="text" name="nazwisko" id="nazwisko"> <br>
            Symbol: <input type="number" name="symbol" id="symbol"> <br>

            <input type="submit" value="DODAJ" id="dodaj">
        </form>
    </section>


    <section id="prawy_dolny">
    <?php
        $polaczenie_2 = mysqli_connect("localhost", "root", "", "biblioteka");

        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $symbol = $_POST['symbol'];

            echo "Czytelnik $imie $nazwisko został(a) dodany do bazy danych";
                
        $zapytanie_2 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$symbol')";
        $wynik_2 = mysqli_query($polaczenie_2, $zapytanie_2);

        mysqli_close($polaczenie_2);
        ?>
    </section>


    <footer>
        <p>Projekt strony: 00112233122</p>
    </footer>
</body>

</html>