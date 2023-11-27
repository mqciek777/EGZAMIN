<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>

<?php
    $conn = mysqli_connect("localhost", "root", "", "dane4");

    if(!$conn) {
        echo ("Błąd połączenia z bazą danych");
    }
?>

    <main>

        <article>
            <header>
                <h3>Portal Społecznościowy - panel administratora</h3>
            </header>


            <section id='lewy'>
                <h4>Użytkownicy</h4>
                 
                <?php
                $zapytanie1 = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30";
                $wynik1 = mysqli_query($conn, $zapytanie1);
                

                while ($row1 = mysqli_fetch_array($wynik1)) {
                    $wiek = 2023-$row1['rok_urodzenia'];
                    echo ($row1['id'].". ".$row1['imie']." ".$row1['nazwisko'].", ".$wiek."lat"."<br>");
                }
                ?>
                
                <a href='settings.html'>Inne ustawienia</a>
            </section>


            <section id='prawy'>
                <h4>Podaj id użytkownika</h4>

                <form method="POST" action="">
                    <input type="number" name="id_osoby" placeholder="id" required>
                    <input type="submit" id="button" name="button" value="ZOBACZ">
                </form>    

                <hr>
                
                <?php
                $pobrane = $_POST["id_osoby"];
                $zapytanie2 = "SELECT osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby, hobby WHERE osoby.Hobby_id = hobby.id AND osoby.id=$pobrane";
                $wynik2 = mysqli_query($conn, $zapytanie2);

                while ($row2 = mysqli_fetch_array($wynik2)) {

                $rok_urodzenia = $row2['rok_urodzenia'];
                $opis = $row2['opis'];
                $nazwa = $row2['nazwa'];
                $fota = $row2['zdjecie'];

                    echo ("<h2>".$pobrane.". ".$row2['imie']." ".$row2['nazwisko']."</h2>");
                    echo ("<img src=$fota alt='$pobrane'");
                    
                    echo ("<br>"."<p>Rok urodzenia: $rok_urodzenia</p>");
                    echo ("<p>Opis: $opis</p>");
                    echo ("<p>Hobby: $nazwa</p>");
                }
                ?>
                
            </section>


            <footer>
                Stronę wykonał: 213131231413
            </footer>
            


        </article>

    </main>
</body>

</html>