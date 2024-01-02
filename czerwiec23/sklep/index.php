<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <header>
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </header>

    <section id="lewy">
        <h2>Taniej o 30%</h2>

        <ol>
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "sklep");

            $zapytanie1 = "SELECT nazwa FROM towary WHERE promocja=1";
            $wynik = mysqli_query($polaczenie, $zapytanie1);

            while ($tekst = mysqli_fetch_array($wynik)) {
                echo "<li>$tekst[0]</li>";
            }

            mysqli_close($polaczenie);
            ?>
        </ol>
    </section>

    <section id="srodkowy">
        <h2>Sprawdź cenę</h2>

        <form action="index.php" method="POST">
            <select name="produkt">
                <option>Gumka do mazania</option>
                <option>Cienkopis</option>
                <option>Pisaki 60 szt.</option>
                <option>Markery 4 szt.</option>
            </select>

            <input type="submit" value="SPRAWDŹ">
        </form>

        <?php
        $polaczenie2 = mysqli_connect("localhost", "root", "", "sklep");

        if (isset($_POST['produkt'])) {
            $wybrano = $_POST['produkt'];

            $zapytanie2 = "SELECT cena FROM towary WHERE nazwa LIKE '$wybrano' ";
            $wynik2 = mysqli_query($polaczenie2, $zapytanie2);

            while ($cena = mysqli_fetch_array($wynik2)) {
                $cena_po_rabacie = $cena[0] * 0.7;
                echo "<div id='wynik'>
                        Cena regularna: $cena[0] <br>
                        Cena w promocji 30%: $cena_po_rabacie
                    </div>";
            }
        }
        mysqli_close($polaczenie2);
        ?>

    </section>

    <section id="prawy">
        <h2>Kontakt</h2>

        <p>e-mail:
            <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
        </p>

        <img src="promocja.png" alt="promocja">

    </section>

    <footer>
        <h4>Autor strony: 00122318512</h4>
    </footer>
</body>

</html>
