<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";

$nombre_archivo = "datos.txt";
if (file_exists($nombre_archivo))
{
   $fich = fopen($nombre_archivo, "r");
   while (!feof($fich))
   {
      $linea = fgets($fich);
      echo $linea . "<br />";
   }
   fclose($fich);
}
else
   echo "El archivo $nombre_archivo todavía no existe";

echo "<BR><A HREF=\"alumno.html\">Volver</A>\n";
?>
