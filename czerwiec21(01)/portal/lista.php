<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header>
        <h1>Portal Społecznościowy - moje konto</h1>
    </header>
    
    <main>
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>Muzyka</li>
            <li>Film</li>
            <li>Komputery</li>
        </ul>
        
        <h2>Moi znajomi</h2>

        <?php
        $polaczenie = mysqli_connect("localhost", "root", "", "dane");

        $zapytanie = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1,2,6);";
        $wynik = mysqli_query($polaczenie, $zapytanie);

        while($wiersz = mysqli_fetch_row($wynik)) {
            echo " 

            <div id='zdjecie'> 
                <img src='{$wiersz[3]}' alt='{przyjaciel}'>
            </div>

            <div id='opis'>
                <h3>{$wiersz[0]} {$wiersz[1]}</h3>
                <p>Ostatni wpis: {$wiersz[2]}</p>
            </div>

            <div id='linia'>
                <hr>
            </div>
                ";
            }

        mysqli_close($polaczenie);
        ?>

    </main>
    
    <footer id="1">
        Stronę wykonał: 003322198764
    </footer>

    <footer id="2">
        <a href="mailto:ja@portal.pl">Napisz do mnie</a>
    </footer>
    
</body>
</html>