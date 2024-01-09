<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>


    <section id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>

        <?php
        $polaczenie_1 = mysqli_connect("localhost", "root", "", "egzamin4");

        $zapytanie_1 = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0;";
        $wynik_1 = mysqli_query($polaczenie_1, $zapytanie_1);

        while($dane_1 = mysqli_fetch_array($wynik_1)) {
            echo "
            $dane_1[0]. $dane_1[1], cena: $dane_1[2] <br>
            ";
        };

        mysqli_close($polaczenie_1);
        ?>
    </section>


    <section id="lewy">
        <h3>NAJTANIEJ...</h3>
            <table>
            <tr>
                <td>Włochy</td> <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Francja</td> <td>od 1200 zł</td>           
            </tr>
            <tr>
                <td>Hiszpania</td> <td>od 1400 zł</td>           
            </tr>
        </table>
    </section>


    <section id="srodkowy">
        <h3>TU BYLIŚMY</h3>

        <?php
        $polaczenie_2 = mysqli_connect("localhost", "root", "", "egzamin4");

        $zapytanie_2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
        $wynik_2 = mysqli_query($polaczenie_2, $zapytanie_2);

        while($dane_2 = mysqli_fetch_array($wynik_2)) {
            echo "
            <img src='$dane_2[0]' alt='$dane_2[1]'>
            ";
        };

        mysqli_close($polaczenie_2);
        ?>
    </section>


    <section id="prawy">
        <h3>SKONTAKTUJ SIĘ</h3>

        <a href="mailto:wycieczki@wycieczki.pl">Napisz do nas</a>
        <p>Telefon: 555666777</p>
    </section>


    <footer>
        <p>Stronę wykonał: 11223344556</p>
    </footer>
    
</body>
</html>