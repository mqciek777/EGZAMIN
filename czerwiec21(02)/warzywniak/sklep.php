<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <header id="lewy">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </header>


    <header id="prawy">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li> <a href="https://terapiasokami.pl/" target="_blank">soki</a> </li>
        </ol>
    </header>


    <main>
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "dane2");
            
            $zapytanie = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1,2);";
            $wynik = mysqli_query($polaczenie, $zapytanie);

            while ($produkt = mysqli_fetch_array($wynik)) {
                echo "<div id='produkt'>
                        <img src='$produkt[4]' alt='warzywniak'>
                        <h5>$produkt[0]</h5>
                        <p>Opis: $produkt[2]</p>
                        <p>Na stanie: $produkt[1] </p>
                        <h2>$produkt[3] zł</h2>
                    </div>";
            }

            mysqli_close($polaczenie);
        ?>
    </main>


    <footer>
        <form action="sklep.php" method="post">
            Nazwa: <input type="text" name="nazwa" id="nazwa">
            Cena: <input type="text" name="cena" id="cena">
            <input type="submit" value="Dodaj produkt">
        </form>
        
        <?php
                $polaczenie2 = mysqli_connect("localhost", "root", "", "dane2");

                if(isset($_POST['nazwa']) && isset($_POST['cena'])) {
                    $nazwa = $_POST['nazwa'];
                    $cena = $_POST['cena'];

                    $zapytanie2 = "INSERT INTO produkty VALUES (NULL, '1', '4', '$nazwa', '10', NULL, '$cena', 'owoce.jpg')";
                    $wynik2 = mysqli_query($polaczenie2, $zapytanie2);
                   
                }

                mysqli_close($polaczenie2);
                ?>
        Stronę wykonał: 00412298764
    </footer>
    
</body>
</html>