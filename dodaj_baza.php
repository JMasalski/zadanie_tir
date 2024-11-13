<?php
    $baza = "dane";
    $link = new mysqli('localhost', 'root', '','wazenie');
    
    $lokalizacja = $_POST['lokalizacja'];
    $waga = $_POST['waga'];
    $rejestracja = $_POST['rejestracja'];
    $dzien = $_POST['dzien'];
    $czas = $_POST['czas'];
    $sql ="INSERT INTO `wagi`(`lokalizacje_id`, `waga`, `rejestracja`, `dzien`, `czas`) VALUES ('$lokalizacja','$waga','$rejestracja','$dzien','$czas')";
    if ($link->query($sql)) echo "Dane dodane";
    else echo "Błąd dodawania danych " . $link->error;

    $link->close();

?>