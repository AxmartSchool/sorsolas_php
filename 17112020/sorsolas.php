<?php

$sorsolas = 0;
$uzenet = "A sorsolas eredmenye: ";
if (isset($_GET["gomb"])) {
   $sorsolas = $_GET["lotto"];


$szamok = array();
$min = 1;

switch ($sorsolas) {
    case 5:
        $max = 90;
        break;

    case 6:
        $max = 45;
        break;

    case 7:
        $max = 35;
        break;
    

}

for ($i=0; $i < $sorsolas; $i++) { 
    $randomSzam = rand($min,$max);
    while (in_array($randomSzam,$szamok)) {
        $randomSzam = rand($min,$max);


    }

    $szamok[$i] = $randomSzam;
    
    
}

sort($szamok);
 
foreach ($szamok as $value) {
    
    $uzenet = $uzenet.$value.("\t");


}

}

include("./header.php") ?>
<h2> Lotto Sorsolas </h2>

<form action="" method="GET">
<input type="radio" name="lotto" value="5" checked> 5-os lotto
<input type="radio" name="lotto" value="6"> 6-os lotto
<input type="radio" name="lotto" value="7"> Skandinav lotto

<input type="submit" name="gomb" value="Sorsolas"> 
</form>


<?php

echo"<div>$uzenet</div>";

include("./footer.php") ?>