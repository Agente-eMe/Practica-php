<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";
echo "<H2>Agenda Virtual PHP</H2>\n";

$buscar = trim($_REQUEST['buscar']);
$nombre_archivo = "agenda.txt";
$encontrado = false;

if ($buscar == "")
{
   echo "Escriba el nombre del contacto que quiere buscar<BR>\n";
}
else if (file_exists($nombre_archivo))
{
   $fich = fopen($nombre_archivo, "r");
   while (!feof($fich))
   {
      $linea = fgets($fich);
      if (strlen($linea) > 0 && strstr(strtolower($linea), strtolower($buscar)))
      {
         echo $linea . "<br />";
         $encontrado = true;
      }
   }
   fclose($fich);

   if ($encontrado == false)
      echo "No se ha encontrado ningún contacto con ese nombre<BR>\n";
}
else
   echo "Todavía no hay contactos en la agenda<BR>\n";

echo "<BR><A HREF=\"agenda.html\">Volver a la agenda</A>\n";
?>
