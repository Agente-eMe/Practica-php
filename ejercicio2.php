<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";

$suma1 = 0;
$suma2 = 0;

// Cada jugador tira cinco dados y se guardan en una tabla (array)
for ($i=0; $i<5; $i++)
{
   $jugador1[$i] = rand(1, 6);
   $jugador2[$i] = rand(1, 6);
   $suma1 = $suma1 + $jugador1[$i];
   $suma2 += $jugador2[$i];
}

echo "<H2>Jugador 1</H2>\n";
foreach ($jugador1 as $dado)
   echo "<IMG SRC=\"img/dado$dado.jpg\" WIDTH=\"100\">\n";

echo "<H2>Jugador 2</H2>\n";
foreach ($jugador2 as $dado)
   echo "<IMG SRC=\"img/dado$dado.jpg\" WIDTH=\"100\">\n";

echo "<H2>Resultado</H2>\n";
echo "Jugador 1: $suma1 puntos. Jugador 2: $suma2 puntos.<BR>\n";

if ($suma1 > $suma2)
   echo "Ha ganado el jugador <B>1</B>.\n";
else if ($suma2 > $suma1)
   echo "Ha ganado el jugador <B>2</B>.\n";
else
   echo "Ha habido un <B>empate</B>.\n";
?>
