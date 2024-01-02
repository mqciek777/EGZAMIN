<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>

    <header id="lewy">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </header>


    <header id="prawy">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </header>

    
    <section id="polecane">
        <h3>Polecamy</h3>


            <?php
            $conn = mysqli_connect("localhost", "root", "", "dane3");

            $zapytanie = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18,22,23,25)";
            $wynik = mysqli_query($conn, $zapytanie);

            while ($produkt = mysqli_fetch_array($wynik)) {
                echo "<div class='film'> 
                    <h4>{$produkt['id']}. {$produkt['nazwa']}</h4>
                    <img src='{$produkt['zdjecie']}' alt='film'>
                    <p>{$produkt['opis']}</p>
                </div>";
            }
            mysqli_close($conn);
            ?>


    </section>


    <section id="filmy_fantastyczne">
        <h3>Filmy fantastyczne</h3>

            <?php
            $conn2 = mysqli_connect("localhost", "root", "", "dane3");

            $zapytanie2 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id=12;";
            $wynik2 = mysqli_query($conn2, $zapytanie2);

            while ($produkt2 = mysqli_fetch_array($wynik2)) {
                echo "<div class='film'> 
                    <h4>{$produkt2['id']}. {$produkt2['nazwa']}</h4>
                    <img src='{$produkt2['zdjecie']}' alt='film'>
                    <p>{$produkt2['opis']}</p>
                </div>";
            }
            mysqli_close($conn2);
            ?>
            

    </section> 


    <footer>

        <form action="video.php" method="POST">
            Usuń film nr.: <input type="number" name="id">
            <input type="submit" value="Usuń film">
        </form>  

            <?php

        $conn3 = mysqli_connect("localhost", "root", "", "dane3");

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $zapytanie3 = "DELETE FROM produkty WHERE id = $id";
            $wynik3 = mysqli_query($conn3, $zapytanie3);
        }

        mysqli_close($conn3);
        ?>
    Strone wykonał: <a href="mailto:ja@poczta.com">01923022123</a>  
    
    </footer>
    
</body>
</html>