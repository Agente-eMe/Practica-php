<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";

$alto = $_REQUEST['alto'];
$ancho = $_REQUEST['ancho'];

if (is_numeric($alto) && is_numeric($ancho) && $alto > 0 && $alto <= 100 && $ancho > 0 && $ancho <= 100)
{
   echo "Alto: $alto<BR>\n";
   echo "Ancho: $ancho<BR><BR>\n";

   for ($i=1; $i<=$alto; $i++)
   {
      for ($j=1; $j<=$ancho; $j++)
         echo "* ";
      echo "<BR>\n";
   }
}
else
   echo "Los valores deben ser números mayores que 0 y menores o iguales que 100<BR>\n";

echo "<BR><A HREF=\"ejercicio1.html\">Volver</A>\n";
?>
