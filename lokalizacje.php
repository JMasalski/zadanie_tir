<?php
    $link = new mysqli('localhost' , 'root' , '', 'wazenie');
    $sql = "SELECT `ulica` FROM `lokalizacje`;";

    $dane =$link->query($sql);
    
    while($row = $dane->fetch_row()){
        echo "<li> ulica " . $row[0] . "</li>";
    }
    $link->close();
?>