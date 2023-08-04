# Administrador de Usuarios Quan

Este proyecto es un Administrador de Usuarios desarrollado con Laravel y Vue.js que permite administrar los usuarios del sistema.

## Requisitos mínimos

Para poder ejecutar este proyecto en tu entorno local, necesitas tener instalados los siguientes requisitos:

- PHP 7.4 o superior
- Composer
- Node.js y npm
- MySQL o cualquier otro motor de base de datos compatible con Laravel
- Servidor web (por ejemplo, Apache o Nginx)

## Clonar el repositorio

Puedes clonar este repositorio usando Git. Abre tu terminal o consola y ejecuta el siguiente comando:

``
git clone https://github.com/brian623/quan_crud.git
``

## Configuración

Sigue estos pasos para configurar el proyecto:

1. Copia el archivo `.env.example` y crea un nuevo archivo llamado `.env` en la raíz del proyecto:

``
cp .env.example .env
``

2. Genera una nueva clave de aplicación:
``
php artisan key:generate
``

3. Configura la conexión a la base de datos en el archivo `.env` con tus credenciales de MySQL u otro motor de base de datos:

``
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
``

4. Instala las dependencias de PHP usando Composer:

``
composer install
``

5. Instala las dependencias de JavaScript usando npm:
``
npm install
``

6. Compila los assets:

``
npm run dev
``

7. Ejecuta las migraciones para crear las tablas de la base de datos:

``
php artisan migrate
``

8. Genera la clave de encriptación para JWT (JSON Web Tokens):

``
php artisan jwt:secret
``

## Ejecutar el proyecto

Una vez que hayas configurado el proyecto, puedes iniciarlo usando el servidor de desarrollo de Laravel. Ejecuta el siguiente comando:

``
php artisan serve
``

Ahora, podrás acceder al administrador de usuarios en tu navegador ingresando a `http://localhost:8000`.

Recuerda que debes haber configurado el servidor web y PHP adecuadamente para que el proyecto funcione correctamente.

¡Listo! Ahora deberías tener el Administrador de Usuarios Quan funcionando en tu entorno local.




