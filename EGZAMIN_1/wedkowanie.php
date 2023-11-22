<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_2.css">
</head>

<body>

<?php
    $conn = mysqli_connect("localhost", "root", "", "wedkowanie");

    if (!$conn) {
        die("Błąd połączenia z bazą: " . mysqli_connect_error());
    }
?>




    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>

<main>

    <section id="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
        <?php
        $zapytanie3 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby,lowisko WHERE lowisko.ryby_id=ryby.id AND lowisko.rodzaj=3";
        $wynik3 = mysqli_query($conn, $zapytanie3);

        while ($row = mysqli_fetch_array($wynik3)) {
            echo ("<b>"."<li>".$row['nazwa']." pływa w rzece ".$row['akwen'].", ".$row['wojewodztwo']."</li>");
            }

        ?>
    </ol>
</section>



    <section id="prawy">
        <img src="ryby/ryba1.jpg" alt="Sum"><br>
        <a href="ryby/kwerendy.txt" target="_blank">Pobierz kwerendy</a>
    </section>



    <section id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>

                <?php
                    $zapytanie1 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
                    $wynik1 = mysqli_query($conn, $zapytanie1);

                    while ($row1 = mysqli_fetch_array($wynik1)) {
                        echo("<tr>");
                            echo ("<td>".$row1['id']."</td>");
                            echo ("<td>".$row1['nazwa']."</td>");
                            echo ("<td>".$row1['wystepowanie']."</td>");
                        echo("</tr>");
                    }
                    mysqli_close($conn);
                ?>
                
            </table>
    </section>

</main>
    
    <footer>
        <p>Stronę wykonał: 21414312213</p>
    </footer>

    
</body>
</html>