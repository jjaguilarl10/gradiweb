## Configuraciones Archivos
Version Php  : 7.4.29
laravel  :   7.29
boostrap : v 5.

## Passos generales

Con el fin de que se puedan realizar la descarga y pruebas respectivas para el proyecto a continucacion describo algunas de las consideracion necesarias a tener en cuenta.

1-  Realizar una actualización del archivo composer para descargar todos los requerimientos necesarios para el proyecto desde el archivo composer.json

2-  Correr o crear de ser necesario el archivo .env desde el archivo de .env.copia, con el fin de poder tener actualizado y establecer la configuración de la bd

3 - Correr las migraciones que permitira crear las tablas necesarios para el proyecto y sus prueba
php artisan migrate

4 - Correr los seeders que nos permitira cargar unos datos necesarios en algunas de las tablas con el fin de realizar las pruebas.

php artisan db:seed

nota: las tablas que se actualizaran seran 
tabla marcas : que permitira cargar unas marcas de vehiculos generales
tabla users  : que permitira crear un usuario de prueba para acceder al sistema.
               usuario : 123456798
               clave   : password


## Consideraciones

Aunque no se pidio un sistema de autenticacion se ha cargado uno para poder implementra el sistema de login y asi poder acceder las opciones solicitdas como proceso de la prueba tecnica.

Aunque se a usado boostrap, se ha implementado algunos estilos css propios para modificar un poco la apariencia del lado del front, de igual forma se ha cargado un archiv .JS con implementaciones propias de algunas funciones para oprtimizar y reutilizar algunas de las mismas como es el caso de la carga y llamado de los modals, la carga de los formularios y extraer la informacion de los mismos para poder llevarlos al controllador.

En el directorio de resources/views se tiene tres directorio descriminados de la siguiente forma :

views/auth      : contiene los archivos del proceso de autenticacion login para acceder al sistema
views/intranet  : Seria el directorio que contiene todos los archivos/modulos que haran parte del proyecto
views/templates : Aqui estableci los archvos maestros del diseño o plantillas que se necesitan de forma global para el proyecto, y asi poder separar algunos de los componentes que hacen parte del contenedor principal de cada o de todos los modulos del sistema.


para el modulo/opción de reportes se queria hacer un modulo un poco mas configurables es decir que se pudiera establecer las columnas y filtros que se desea mostrar para el reporte y asi fuera mas dinamico pero no queria depornto hacer mas de la cuenta y depronto me fuera afectar igual se queria generar el archivo de excel.






