# Proyecto de Adopción de Tortugas

Este proyecto es un centro de adopción de tortugas que permite la gestión de información de tortugas y de adopciones. Solo los administradores pueden gestionar estas cosas, mientras que los usuarios con el rol 'user' solo pueden ver la información y solicitar adopciones.

## Requisitos

- PHP
- Composer
- Laravel

## Instalación y Configuración

Sigue estos pasos para instalar y configurar el proyecto:

1. **Clona el repositorio**:

       git clone https://github.com/ivanlegranbizarro/adoptATurtle
       cd adoptATurtle

2. **Configurar archivo .env**:
		  Duplica el archivo '.env.example' y renómbrarlo como '.env'


3. **Instalar dependencias**:

    composer install

4. **Ejecuta las migraciones y puebla la base de datos sqlite**:

     php artisan migrate --seed

5. **Genera el enlace simbólico para el almacenamiento de archivos**:

    php artisan storage:link

6. **Ejecuta el servidor web**:

     php artisan serve

7. **Seeders para testear el proyecto**:

  El proyecto 'plantará' dos ejemplos con dos tortugas ya creadas y dos usuarios. Uno de ellos 'admin@admin.com' con password 'password' con privilegios de administrador, y un usuario sin privilegios 'ruben@ruben.com' con password 'password'.


# Rutas del proyecto de adopción de tortugas

## Rutas Principales

- **Inicio**:
  - `GET /` - Muestra la lista de tortugas disponibles para adopción.
    - **Controlador**: `TortugaController`
    - **Acción**: `index`
    - **Nombre de la Ruta**: `tortugas.index`

- **Registro de Usuarios**:
  - `GET /register` - Muestra el formulario de registro.
    - **Controlador**: `RegisterController`
    - **Acción**: `index`
    - **Nombre de la Ruta**: `register`

- **Inicio de Sesión**:
  - `GET /login` - Muestra el formulario de inicio de sesión.
    - **Controlador**: `AuthorizationController`
    - **Acción**: `index`
    - **Nombre de la Ruta**: `login`

- **Cierre de Sesión**:
  - `GET /logout` - Cierra la sesión del usuario.
    - **Controlador**: `AuthorizationController`
    - **Acción**: `logout`
    - **Nombre de la Ruta**: `logout`

- **Gestión de Tortugas**:
  - `GET /tortugas` - Muestra la lista de tortugas (recurso index).
  - `GET /tortugas/create` - Muestra el formulario para crear una nueva tortuga.
  - `GET /tortugas/{tortuga}` - Muestra la información de una tortuga específica.
  - `GET /tortugas/{tortuga}/edit` - Muestra el formulario para editar una tortuga existente.
    - **Controlador**: `TortugaController`
    - **Acciones**: `index`, `create`, `show`, `edit`

- **Gestión de Adopciones**:
  - `GET /adopciones` - Muestra la lista de adopciones (recurso index).
  - `GET /adopciones/create/{tortuga}` - Muestra el formulario para solicitar la adopción de una tortuga específica.
  - `GET /adopciones/{adopcion}` - Muestra la información de una adopción específica.
  - `GET /adopciones/{adopcion}/edit` - Muestra el formulario para editar una adopción existente.
    - **Controlador**: `AdopcionController`
    - **Acciones**: `index`, `create`, `show`, `edit`
    - **Nombre de la Ruta para Crear Adopción**: `adopciones.create`
    - **Nombre del Parámetro**: `adopcion`
