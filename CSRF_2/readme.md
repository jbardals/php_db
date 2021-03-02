

# CSRF - Cross Site Request Forgery
El CSRF o XSRF (del inglés Cross-site Request Forgery o falsificación de petición en sitios cruzados) es un tipo de exploit malicioso de un sitio web en el que se consigue que se ejecuten comandos no autorizados, por un usuario autorizado del sitio web, sin que éste lo pretenda. 
Los casos más comunes son con un link (a veces cargados desde una imagen), aunque igualmente puede ser con un formulario en donde el botón para enviar se disfrace como un link.

En este ejemplo, en *vista_peligrosa.php* tenemos un formulario para hacer una transferencia. En este caso, no es un ejemplo real, la transferencia se hace mediante el envío de una petición GET
`transferir.php?desde=aaaaa&para=bbbbbb&cantidad=4`

Si un atacante descubre que con el simple hecho de visitar ese link se hace la transferencia, entonces puede hacer que un usuario autorizado ejecute ese link sin que se dé cuenta (se realizaría una operación autorizada sin que el usuario tuviera conocimiento de ello). En nuestro ejemplo si al usuario se le ocurre visitar *pagina_trampa.php*vemos que se realiza una transferencia como si se ejecutara desde el formulario -> comprobarlo en *transferencias.txt*

## Cómo prevenir un ataque CSRF
Con un token CSRF, que genera una cadena aleatoria.
Ese token no lo sabrá el atacante, y al usuario se lo daremos en el formulario, mediante un valor oculto-> *vista_segura.php*
Aquí también se le inyectará el token a la sesión de usuario.
Ahora en el archivo de transferencia *transferir_seguro.php* primero vamos a comparar el token con el que tenemos en la sesión y haremos la transferencia sólo si coinciden.
*strcmp*-> funcion que que devuelve cero si las cadenas son idénticas. Se podría hacer tb la comparación con *hash_equals*

la transferencia se hace mediante el envío de una petición GET
transferir_seguro.php?desde=aaaaa&para=bbbbb&cantidad=10000"
que ahora no va a funcionar el usuario malicioso nunca sabrá el token y porque no puede calcularlo de ninguna manera.

