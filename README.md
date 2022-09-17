## ![alt text](https://99minutosworkspace.atlassian.net/wiki/download/attachments/32773/atl.site.logo?version=1&modificationDate=1612933462750&cacheVersion=1&api=v2 "99minutes")      

##**99 Minutos Test**

### Repositorio: 99minutos-test

### Configuración:
| Requisitos   			| Versión    			        |
| :------------- 		| :--------- 			        |
| Sistema Operativo    	|                               | 
| Servidor Web      	| `Apache >= 2.4`		        | 
| PHP  					| `PHP >= 7.4.0`				|			
| Base de datos      	| `MySql >= 5.7`		    	| 
| Composer              | `>= 2.1.12`                   |
| Laravel               | `Laravel = 9`               	|


.

### Archivos de configuración / conexión:

1. `.env` - Para desarrollo

___
**NOTA:** Todos los archivos contenidos en este repositorio son confidenciales.


Instalación
-----------
__Esta guía de instalación presupone que usted tiene instaladas y configuradas las herramientas para el entorno de desarrollo__.

* __Asegúrese de tener instalados los requisitos de configuración.__

* Clonar repositorio.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
git clone https://github.com/cofran91/99minutos-test.git
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Posicionarse en la carpeta

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
cd 99minutos-test
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Instalar paquetes Laravel

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
composer install
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Crear el archivo .env

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
cp .env.example
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Crear la base de datos de desarrollo `99minutos-test`

* Cambiar las configuraciones del entorno de desarrollo en el archivo `.env` 

* Crear la clave de encriptación de la aplicación

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan key:generate
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Crear la clave de autenticación de la aplicación

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan jwt:secret

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Correr migraciones

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan migrate
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Correr seeders

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
php artisan db:seed
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

* Consulte la documentación de los servicios

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
https://documenter.getpostman.com/view/11854770/2s7YfU8CZV
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

