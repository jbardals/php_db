

En este ejercicio veremos cómo **registrar usuarios en una base de datos**, los cuales tendrán correo y contraseña. Más tarde, en el apartado del login vamos a comprobar que los datos coincidan de acuerdo a los que existen en la base de datos.
Finalmente, tendremos una página protegida a donde solamente los usuarios que hayan iniciado sesión tendrán acceso. En ella mostraremos el correo del usuario actualmente logueado.
Resumiendo, **haremos un login con PHP y MySQL, manejando sesiones, así como el registro de los usuarios**. De igual manera indicaremos si un usuario ya está registrado
Pasos:

 - Crear base de datos -> esquema.sql
 - Conexion a BD -> base_de_datos.php
 - Registro de usuario -> registro.html y registro.php. Este ultimo fichero hace uso de funciones en funciones.php
 - Login de usuario -> login.html y login.php
 - Si usuario correcto redirige a la página -> secreta.php 
 *Hacemos una redirección a la página protegida o secreta en donde solamente entran los usuarios logueados; recuerda que el inicio de sesión y la comprobación de datos se hace en el archivo de **funciones.php** en conjunto con **base_de_datos.php***
 En esta página mostramos también el correo del usuario que está logueado, el cual guardamos en `$_SESSION` dentro de **funciones.php**.

 

