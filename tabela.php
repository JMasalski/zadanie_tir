<?php
    $link = new mysqli('localhost' , 'root' , '', 'wazenie');
    //$sql = "SELECT w.rejestracja, w.waga, w.dzien, w.czas, CASE WHEN w.waga > 8 THEN l.ulica ELSE NULL END AS ulica FROM wagi w LEFT JOIN lokalizacje l ON w.lokalizacje_id = l.id;";
    $sql = "SELECT w.rejestracja, w.waga, w.dzien, w.czas, l.ulica FROM wagi w JOIN lokalizacje l ON w.lokalizacje_id = l.id WHERE w.waga > 8";
    $dane =$link->query($sql);
    
    echo <<<EOT
    <table>
            <tr>
                <th>rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzień</th>
                <th>czas</th>
            </tr>       
EOT;
while($rek = $dane->fetch_object()){
    echo "<tr><td>$rek->rejestracja</td><td>$rek->ulica</td><td>$rek->waga</td><td>$rek->dzien</td><td>$rek->czas</td></tr>";
}

echo "</table>";
    $link->close();
?>