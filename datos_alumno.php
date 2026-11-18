<?php
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n";

$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$mostrar = $_REQUEST['mostrar'];

// Un checkbox sin marcar no se envía, por eso se usa isset
if (isset($_REQUEST['matriculado']) && isset($_REQUEST['ensenanza']))
{
   $ensenanza = $_REQUEST['ensenanza'];
   $estado = "está matriculado en $ensenanza";
}
else
   $estado = "no está matriculado";

$texto = "El alumno $nombre, con teléfono $telefono, $estado";

if ($mostrar == "pantalla")
{
   echo "El alumno <B>$nombre</B>, con teléfono <B>$telefono</B>, <B>$estado</B>\n";
}
else
{
   $nombre_archivo = "datos.txt";
   if ($archivo = fopen($nombre_archivo, "a"))
   {
      if (fwrite($archivo, $texto . "\n"))
      {
         echo "Los datos se han guardado correctamente en $nombre_archivo<BR><BR>\n";
         echo "<A HREF=\"mostrardatos.php\">mostrar archivo</A>\n";
      }
      else
      {
         echo "Ha habido un problema al guardar los datos";
      }
      fclose($archivo);
   }
}

echo "<BR><BR><A HREF=\"alumno.html\">Volver</A>\n";
?>
