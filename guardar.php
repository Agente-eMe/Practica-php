<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";

$nombre = $_REQUEST['nombre'];
$trabajo = $_REQUEST['trabajo'];
$telefono = $_REQUEST['telefono'];
$direccion = $_REQUEST['direccion'];
$otras = $_REQUEST['otras'];

if (trim($nombre) == "")
{
   echo "El nombre es obligatorio<BR>\n";
}
else
{
   $nombre_archivo = "agenda.txt";
   $linea = "Contacto: $nombre $trabajo $telefono $direccion $otras\n";

   if ($archivo = fopen($nombre_archivo, "a"))
   {
      if (fwrite($archivo, $linea))
         echo "Contacto guardado correctamente<BR>\n";
      else
         echo "Ha habido un problema al guardar el contacto<BR>\n";
      fclose($archivo);
   }
}

echo "<BR><A HREF=\"agenda.html\">Volver a la agenda</A> | ";
echo "<A HREF=\"mostrar.php\">Mostrar todos los contactos</A>\n";
?>
