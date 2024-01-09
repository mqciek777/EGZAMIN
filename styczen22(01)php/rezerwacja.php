<?php 
        $polaczenie = mysqli_connect("localhost", "root", "", "baza1");

        $data = $_POST["data"];
        $ile_osob = $_POST["ile_osob"];
        $telefon = $_POST["telefon"];

        $zapytanie = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', '$ile_osob', '$telefon');";
        $wynik = mysqli_query($polaczenie, $zapytanie);

        if($wynik) {
        echo "Dodano rezerwację do bazy";
    };

        mysqli_close($polaczenie);
    ?>