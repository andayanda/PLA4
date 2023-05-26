# PLA4
En este reto utilizaremos ficheros y cookies para añadir multi idioma catalán/castellano a un
dominio web compuesto por tres páginas
Entrega de un dominio compuesto por tres
páginas, que el profesor entregará ya confeccionado, en las que añadiremos las siguientes
operativas:
 Adaptar todas las páginas para que acepten multi idioma
 Añadir un segundo idioma seleccionable por el usuario
 Optimizar el código para cargar las secciones comunes desde ficheros externos
 Guardar la selección de idioma en una cookie
image.png
Adaptación de un dominio de un centro de estudios para incorporar un segundo idioma
seleccionable por el usuario.
Por temas de usabilidad el idioma seleccionado se tiene que mantener en posteriores
conexiones al dominio para evitar que el usuario deba seleccionarlo cada vez que entra-
Especificaciones del usuario:
 Se incorporará en la sección de cabecera de las tres páginas dos enlaces para el cambio de
idioma catalán/castellano
 Al cambiar de idioma en cualquiera de las páginas se debe mantener la página en donde se
ha realizado la selección
No se permitirá que el usuario pueda cambiar el idioma por ninguno otro que no sean los
que se contemplan en la cabecera de las páginas. En este caso se mostrará la página en el
idioma por defecto (inicialmente debería ser el idioma del navegador)
Todos los literales fijos de las tres páginas del dominio tienen que mostrarse igualmente en
los dos idiomas
 El contenido de las páginas de inicio (la escuela) y cursos y horarios deberían poder editarse
en un fichero de texto por si hay que cambiarlos
En la página de formulario de contacto los textos asociados a los errores del formulario
también deben mostrarse en los dos idiomas
SI el usuario cambia de idioma se debería conservar para que éste se mantenga en
conexiones posteriores al dominio, incluso cerrando el ordenador.
Especificaciones técnicas solicitadas:
Las secciones header, nav y footer de las tres páginas las incorporaremos desde ficheros
externos ya que son comunes a las tres páginas del dominio (optimización de código)
 Los enlaces de cambio de idioma utilizarán el método GET
 Utilizaremos variables php para los textos que sean literales fijos:
◦ título de la cabecera
◦ opciones de la barra de navegación
◦ literales del pie de página
◦ título y etiquetas del formulario de contacto
◦ botones y mensajes de error del formulario
 Utilizaremos ficheros de texto plano para el contenido de las páginas de inicio y cursos y
horario (contenido de las secciones <div class="sections"> de inicio y cursos)
 Usar COOKIE para guardar el idioma seleccionado
 El idioma por defecto será el del navegador, siempre y cuando corresponda a catalán o
castellano
 SI el usuario modifica el idioma por la url y éste no corresponde a ninguno de los idiomas
válidos, se mostrará la página en el idioma por defecto.

EJERCICIO 1: INCORPORAR SECCIONES COMUNES DESDE FICHEROS EXTERNOS
A partir de los ficheros index.php, cursos.php y contacto.php proporcionados por el profesor,
incorporar las secciones comunes header, nav y footer desde ficheros externos
Pasos para realizar el ejercicio:
 Crear tres ficheros con la extensión .html uno para cada sección y guardarlos en una
carpeta dentro de la carpeta del dominio
 En cada uno de los archivos index, cursos y contacto incorporar estos ficheros externos
en la ubicación que corresponda a cada uno de ellos. Podéis utilizar require(), include() o
readfile()

EJERCICIO 2: SUBSTITUIR LITERALES FIJOS POR VARIABLES PHP
Pasos a realizar:
 Revisar las secciones comunes del dominio; header, nav y footer y substituir los textos
por variables php. Los textos a substituir son los siguientes:
◦ título de la cabecera
◦ textos de las opciones de la barra de navegación
◦ literales del pie de página
 Revisar la página contacto.php y substituir los siguientes elementos por variables php:
◦ título y etiquetas del formulario de contacto
◦ botones y mensajes de error del formulario
NOTA: Ejemplo para el título de la cabecera: <h1><?=$titulo_header?></h1>

EJERCICIO 3: CREACION DE LOS FICHEROS DE IDIOMA
NOTA: Las traducciones al catalán las encontrareis en el fichero traducciones.txt
Pasos a realizar:
 Crearemos un fichero php que contendrá todas las variables anteriores en uno de los
idiomas (por ejemplo castellano). Le daremos un nombre similar a contenido_es.php
(importante utilizar el código ISO del idioma: ‘es’ para castellano y ‘ca’ para catalán)
Ejemplo:
$titulo_header="Instituto<br>de Estudios Modernos";
.../… resto de variables
 Replicaremos el fichero anterior para todos los idiomas de forma que, en cada uno de ellos,
traduciremos los textos al idioma correspondiente. Estos ficheros los guardaremos con el
mismo nombre que el fichero anterior pero con la terminación que corresponda al idioma
que contiene (ejemplo: contenido_ca.php, contenido_en.php,...)
$titulo_header="Institut<br>d’Estudis Moderns";
NOTA: Importante que el nombre de la variable sea el mismo en todos los ficheros de
idioma
 ¿Y con el resto de textos del contenido?. En este caso no utilizaremos variables sino que las
dos secciones de contenido correspondientes a las páginas index.php y cursos.php las
incorporaremos en su totalidad en ficheros externos: contenido_index_es.php,
contenido_cursos_es.php, contenido_index_ca.php y contenido_cursos_ca.php

EJERCICIO 4: CREACION DE LOS ENLACES DE CAMBIO DE IDIOMA
Ahora vamos a incorporar (normalmente en el header) los enlaces para que el usuario pueda
seleccionar el idioma
Pasos a realizar:
 Incorporamos las correspondientes etiquetas de enlace en el header (en principio
haremos que ambos enlaces apunten a la misma página)
<a href="index.php">ES</a> | <a href="index.php">CA</a>
 En el atributo href vamos a incorporar el parámetro que enviaremos al servidor con el
idioma seleccionado
<a href="index .php?idioma=es">ES</a> | <a href="index .php?idioma=ca">CA</a>
 Vamos a incorporar ahora el código php necesario para recoger este parámetro de la
URL (y que llega, por tanto, por el método GET) y cargar el archivo con las variables que
correspondan al idioma seleccionado:
◦ Tendremos que definir un idioma por defecto para que sea el que se muestre al
entrar en la página por primera vez:
$idioma = "es";
◦ Detectamos cuando el usuario pulsa sobre los enlaces de cambio de idioma (nos
llegará el parámetro idioma por la url)
if (isset($_GET["idioma"])){ $idioma = $_GET["idioma"]; }
◦ Incorporamos el fichero que contiene las variables con los textos en el idioma
seleccionado por el usuario
include ("contenido_$idioma.php");
 En las páginas de inicio y cursos tendremos que incorporar los ficheros de contenido
que elaboramos en el paso anterior en la ubicación que le corresponda a cada uno de
ellos. Podemos utilizar la instrucción
readfile("contenido_index_$idioma.html")
EJERCICIO 5: PROTEGER DOMINIO ANTE IDIOMAS NO PERMITIDOS
Como podremos observar, si el idioma llega al servidor por la URL, el usuario lo podría
manipular de forma directa sin necesidad de utilizar los enlaces de cambio de idioma de la
página. Si, como consecuencia de esta manipulación, llega al servidor un idioma que no sea
catalán o castellano (que son los ficheros que tenemos confeccionados) nos aparecerá la página repleta de errores.
Para proteger la página ante una manipulación del usuario de la URL introduciremos, antes de
cargar el fichero del idioma, una validación que compruebe que el idioma que llega corresponda
a uno para los que existe diccionario.
 Podemos crearnos un array con los idiomas permitidos
$idiomasPermitidos = array('es', 'ca');
 Y cuando comprobamos si llega un idioma por la url comprobamos que el idioma exista
en el array:
if (isset($_GET['idioma']) && in_array($_GET['idioma'], $idiomasPermitidos) )
EJERCICIO 6: IDIOMA POR DEFECTO DEL NAVEGADOR
Por temas de usabilidad podríamos considerar el idioma que tenga seleccionado el navegador
del usuario para utilizarlo como idioma por defecto al entrar en la página.
Para conocer el idioma del navegador podemos utilizar una de las super variables php llamada
$_SERVER. En esta variable (que es un array) encontraremos mucha información relacionada con la petición realizada al servidor:
$idiomaNavegador=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
NOTA 1 : la instrucción substr() extrae dos posiciones desde la posición 0 del texto que informamos como primer parámetro
NOTA 2: Recordad que el idioma del navegador podría ser alguno de los que no tengamos contemplados en la página, por
lo que tendremos que validarlo también contra el array de idiomas válidos que hemos creado en el punto anterior
NOTA 3: Tened en cuenta también la prioridad en la selección del idioma: primero tendríamos que asignar un idioma por
defecto (para que siempre tengamos uno válido al entrar en la página), posteriormente seleccionamos el del navegador
(siempre y cuando éste sea válido) y, por último, realizamos el control de cambio de idioma con los enlaces del header
(éste será el que tenga mayor prioridad)

EJERCICIO 7: GUARDAR EL IDIOMA SELECCIONADO EN UNA COOKIE
Para conservar el idioma que seleccione el usuario y evitar que tenga que volver a seleccionarlo
cada vez que entre en la página, utilizaremos una cookie:
 Cuando comprobamos que el usuario cambia el idioma con los enlaces guardamos éste
en una cookie setcookie('idioma', $idioma, time()+3600*24*30*12, '/');
NOTA: El cuarto parámetro ‘/’ se utiliza para que la cookie esté visible en todas las carpetas del dominio)
 Y ahora tendremos que comprobar, al entrar en la página, si tenemos un idioma
guardado en la cookie para asignarlo como idioma por defecto
NOTA: Recordad que tendremos que situar esta asignación de idioma de la cookie en el lugar correcto del
código para que prevalezca sobre el idioma del navegador pero que tenga menos prioridad que la selección
de idioma por parte del usuario
Ejercicio complementario
Puesto que un usuario avanzado puede manipular una cookie utilizando la consola del
navegador, tendremos que comprobar si el idioma recuperado de la cookie existe en nuestro
array de idiomas permitidos
EJERCICIO 8: MULTI IDIOMA EN TODAS LAS PÁGINAS
Para evitar que, al cambiar de idioma en una página que no sea la principal se vuelva a ésta,
vamos a montar los links del header para el cambio de idioma de forma dinámica:
1.- Obtenemos el nombre de la página donde nos encontramos
$archivo = basename($_SERVER['PHP_SELF']);
2.- Modificamos el atributo href de los enlaces de idioma del header
<a href="<?=$archivo?>?idioma=es">ES</a> | <a href="<?=$archivo?>?idioma=ca">CA</a>
O bien nos ahorramos recuperar el nombre de la página y modificamos el atributo href para
dejar solo el parámetro de envío de idioma
<a href="?idioma=es">ES</a> | <a href="?idioma=ca">CA</a>

EJERCICIO 9: MULTI IDIOMA EN MENSAJES JAVASCRIPT
Si revisamos el fichero javascript del ejercicio veremos que hay varias rutinas de validación y,
cada una de ellas, lleva asociada un mensaje de error. Por ejemplo:
text=(text + "Es obligatorio aceptar la normativa de privacidad")
Estos mensajes los consideraremos literales que también habrá que traducir. SI utilizamos el
mismo sistema utilizado para los literales de las página y utilizamos variables php nos
encontraremos con el problema que estas variables no las ve el servidor y quedan sin traducir.
Ejemplo:
text=(text + '<?=$privacidad?>');
Para evitarlo utilizaremos directamente variables javascript para estos literales:
 Nos crearemos dos ficheros javascript para crear las variables con los mensajes del
formulario en los dos idiomas: variables_ca.js y variables_es.js
 En cada uno de los ficheros creamos las variables necesarias con los textos. Ejemplo:
var privacidad = "Es obligatorio aceptar la normativa de privacidad"
 En el head de la página del formulario, y antes de incorporar el fichero form.js, incluimos un fichero de variables u otro en función del idioma:
<script type="text/javascript" src='include/contenido_js_<?=$idioma?>.js'></script>
 En el fichero form.js substituimos los literales de error por la variable correspondiente:
text=(text + privacidad)
1


[def]: /img/Capturplaa4.JPG