<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
echo "<H2>Agenda Virtual PHP</H2>\n";

$nombre_archivo = "agenda.txt";
if (file_exists($nombre_archivo))
{
   $fich = fopen($nombre_archivo, "r");
   while (!feof($fich))
   {
      $linea = fgets($fich);
      if (strlen($linea) > 0)
         echo $linea . "<br />";
   }
   fclose($fich);
}
else
   echo "Todavía no hay contactos en la agenda";

echo "<BR><A HREF=\"agenda.html\">Volver a la agenda</A>\n";
?>
