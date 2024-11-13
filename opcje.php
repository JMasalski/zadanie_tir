<?php
    $link = new mysqli('localhost', 'root', '', 'wazenie');
    $sql = "SELECT `id`, `ulica` FROM `lokalizacje`;";

    $dane = $link->query($sql);
    
    while ($row = $dane->fetch_row()) {
        echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
    }
    $link->close();

?>