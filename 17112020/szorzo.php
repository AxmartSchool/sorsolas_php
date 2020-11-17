<?php 
$szam = 0;
if (isset($_GET["gomb"])) {
    $szam= $_GET["szam"];

}



include("./header.php") ?>

<h2>Szorzotabla</h2>

<form action="" method="GET">

Szorzotabla merete: <br>
<input type="number" name="szam" min="1" max="15" required>
<input type="submit" name="gomb" value="Lassam!">

</form>


<?php

if ($szam>0) {

    echo"<table>";
for ($i=1; $i <= $szam ; $i++) { 

    echo"<tr>";
    for ($j=1; $j <= $szam ; $j++) { 
            echo "<td title=$i*$j>" . ($i*$j) . "</td>";

    }
    echo"</tr>";

}

echo"</table>";

}

include("./footer.php") ?>