<?php

define('PIEDRA1', "&#x1F91C;");
define('PIEDRA2', "&#x1F91B;");
define('TIJERAS', "&#x1F596;");
define('PAPEL', "&#x1F91A;");

function juegoPTp() {
    $opciones = ['Piedra', 'Papel', 'Tijera'];
    return $opciones[array_rand($opciones)];
}



$result = "";

$player1 = juegoPTp();
$player2 = juegoPTp();

if( $player1 === $player2 ) {
    $resultado = "Empate";

} elseif ($player1 === "Piedra" && $player2 === "Papel" ||
          $player1 === "Papel" && $player2 === "Tijera" ||
          $player1 === "Tijera" && $player2 === "Piedra") {
            $result = "Jugador 2 wins!";

} else {
    $resultado = "Jugador 1 wins!";
}


$jugador1s = $player1 === "Piedra" ? PIEDRA1 : ($player1 == "Papel" ? PAPEL : TIJERAS);
$jugador2r = $player2 === "Piedra" ? PIEDRA2 : ($player2 == "Papel" ? PAPEL : TIJERAS);;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra papel tijera</title>

    <link rel="stylesheet" href="css/sytles.css">
</head>
<body>
    <p> Refresh </p>
    <br>
    <div>
        <div>
            <h2>Juagador1</h2>
            <h1><?php echo $jugador1s; ?></h1>
        </div>
        <div>
            <h2>Jugador 2</h2>
            <h1><?php echo $jugador2r; ?></h1>
        </div>
        <div>
            <h1><?php echo $resultado?></h1>
        </div>
    </div>
</body>
</html>
