<?php
    $link = new mysqli('localhost', 'root', '', 'wazenie');
    $sql = "SELECT `id`, `ulica` FROM `lokalizacje`;";
    $dane = $link->query($sql);

    $listaHTML = "";  // Usuń <ol>
    $selectHTML = "";

    while ($row = $dane->fetch_row()) {
        $ulica = htmlspecialchars($row[1]);
        $listaHTML .= "<li>ulica $ulica</li>";
        $selectHTML .= "<option value=\"$row[0]\">$ulica</option>";
    }
    
    $link->close();

    // Zwracamy dane jako ciąg HTML, rozdzielając część dla listy i dla selecta specjalnym znacznikiem
    echo $listaHTML . "||" . $selectHTML;
?>