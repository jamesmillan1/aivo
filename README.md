# aivo
Test Back End Aivo

JAMES MILLAN
13/10/2018

Prueba Realizada con PHP, Boostrap, Jquery, Ajax y Base de datos MySql.

1.  Copiar los archivos o extraerlos del fichero Test.zip en la carpeta www
2.  Abrir el archivo twitter.sql el cual contiene los scripts para la creacion de la Base de Datos y las tablas.
3.  Copiar los scripts y ejecutarlos en phpmyAdmin.
3.  Ubicarse en la carpeta conexion y abrir el archivo db_config.sql reemplazar los valores del usuario y password (define('DB_USER', "xxxxxx");  define('DB_PASSWORD', "xxxxxx");)
4.  Para validar el archivo que retorna el arreglo, ingresar desde el navegador a la ruta http://localhost/Test/endpoint.php
5.  Para ver el programa en funcionamiento ingresar a http://localhost/Test/index.php
7.  Si se desea verificar el funcionamiento desde la web ingresar a la siguiente ruta:  http://olonte.com/APPS/aivo/index.php o http://olonte.com/APPS/aivo/endpoint.php
8.  Al acceder a la página principal (index.php) se muestra por defecto los últimos 10 tweets en la parte inferior
9.  Se ha creado una opción "New Twitter" en el panel izquierdo para insertar un nuevo tweet, basta solo con seleccionar un nombre de la lista desplegable, escribir un mensaje y presionar el botón "Send".
10. La opción que se encuentra al lado derecho "Show Results", permite seleccionar un número del 1 - 10 de la entrada para que al momento de presionar el botón "Show" refresque la consulta en el panel inferior con los últimos tweets de acuerdo al número ingresado.
