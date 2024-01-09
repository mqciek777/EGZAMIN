<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <header id="header_1">
        <h2>Odloty z lotniska</h2>
    </header>

    
    <header id="header_2">
        <img src="zad6.png" alt="logotyp">
    </header>


    <main>
        <h4>tabela odlotów</h4>

        <table>
            <tr>
                <th>L.P.</th>
                <th>NUMER REJSU</th>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>STATUS</th>
            </tr>

            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "egzamin");

            $zapytanie = " SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";
            $wynik = mysqli_query($polaczenie, $zapytanie);

            while($dane = mysqli_fetch_array($wynik)) {
                echo "
                <tr>
                    <td>$dane[0]</td>
                    <td>$dane[1]</td>
                    <td>$dane[2]</td>
                    <td>$dane[3]</td>
                    <td>$dane[4]</td>
                </tr>
                ";
            };

            mysqli_close($polaczenie);
            ?>
        </table>
    </main>


    <footer id="stopka_1">
        <a href="kw1.jpg" target="_blank">Pobierz obraz</a>
    </footer>


    <footer id="stopka_2">
    <?php
        if(!isset($_COOKIE['visit'])){
            setcookie('visit', time(), time() + 3600);
            echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony<i></p>";
        } else {
            echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
        }
    ?>
    </footer>


    <footer id="stopka_3">
        Autor: 11223344555
    </footer>
    
</body>
</html>