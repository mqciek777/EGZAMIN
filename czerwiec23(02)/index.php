<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>

    <section id="lewy">
        <h2>Nasze ceny</h2>

        <table>
            <?php
                $polaczenie_1 = mysqli_connect("localhost", "root", "", "sklep1");

                $zapytanie_1 = "SELECT nazwa, cena FROM towary LIMIT 4";
                $wynik_1 = mysqli_query($polaczenie_1, $zapytanie_1);

                    while($wiersz_1 = mysqli_fetch_array($wynik_1)) {
                        echo "
                        <tr>
                            <td>$wiersz_1[0]</td>
                            <td>$wiersz_1[1]</td>
                        </tr> ";
                    };

                mysqli_close($polaczenie_1);
            ?>
        </table>
    </section>


    <section id="srodkowy">
        <h2>Koszt zakupów</h2>

        <form method="POST" action="index.php">
            Wybierz artykuł: 
                <select name="produkt" id="produkt">
                    <option>Zeszyt 60 kartek</option>
                    <option>Zeszyt 32 kartki</option>
                    <option>Cyrkiel</option>
                    <option>Linijka 30 cm</option>
                </select>

            <br> Liczba sztuk: <input type="number" name="ile_szt" id="ile_szt" MIN=0> <br>

            <input type="submit" value="OBLICZ" id="oblicz"> <br>
        </form>

        <?php
            if (isset($_POST['produkt'])) {
            $polaczenie_2 = mysqli_connect("localhost", "root", "", "sklep1");

            $wybrany_produkt = $_POST['produkt'];
            $ilosc_produktu = $_POST['ile_szt'];

            $zapytanie_2 = "SELECT cena FROM towary WHERE nazwa LIKE '$wybrany_produkt'";
            $wynik_2 = mysqli_query($polaczenie_2, $zapytanie_2);

            $wiersz_2 = mysqli_fetch_array($wynik_2);

            $obliczona_kwota = $wiersz_2[0]*$ilosc_produktu;
                echo "Wartość zakupów: $obliczona_kwota";

            mysqli_close($polaczenie_2);
            }?>

    </section>


    <section id="prawy">
        <h2>Kontakt</h2>

        <img src="zakupy.png" alt="Hurtownia">

        <p> e-mail:
            <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a>
        </p>
    </section>


    <footer>
        <h4>Witrynę wykonał: 00221199092</h4>
    </footer>
</body>

</html>