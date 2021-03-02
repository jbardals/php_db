


Pasos:

 - Crear un formulario de login -> formulario.html
 - Verificar si el usuario y la contraseña coinciden -> login.php
 - Si coinciden, se inicia sesión y se redirige a otra página -> secreta.php
 - Si no coinciden, se indica con un mensaje
 - Poner un enlace para cerrar sesión -> logout.php
 
 Las sesiones nos permiten **persistir los datos a través de distintas páginas**; incluso si las mismas se refrescan o tienen otro nombre.
En este ejemplo tendremos un formulario simple en donde el usuario escribe su usuario y contraseña; el sistema verifica si son correctos y en caso de que sí, lo redirecciona a una página secreta o protegida.
Comparamos el usuario y la contraseña y en caso de que coincidan, iniciamos sesión son `session_start()`, más tarde se le ponen datos a `$_SESSION` (este es el paso más importante) y redireccionamos a la página secreta. Para redireccionar mandamos un encabezado que dice `Location: secreta.php`

*La parte crucial es iniciar sesión y establecer un valor en $_SESSION** para que luego se pueda leer desde otros lugares.*

En la pagina secreta, verificamos si hay algo en  `$_SESSION`  en la posición usuario, en caso de que no, salimos directamente del script.

*Es importante notar que, en cualquier lugar, para poder usar a  `$_SESSION`, primero debemos llamar a  `session_start`*



