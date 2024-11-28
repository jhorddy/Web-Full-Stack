## Instrucciones para Configurar y Ejecutar la Aplicación
## Backend

### 1. **Configurar la Base de Datos en el archivo `.env`**

Configaramos nuestro `.env` ubicado en el directorio raíz del backend:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks_db
DB_USERNAME=root
DB_PASSWORD=

## Instalar Dependencias del Backend
composer install
composer require fruitcake/laravel-cors

## Ejecutaremos la migración 
php artisan migrate 

### Levantar el Servidor de Desarrollo
php artisan serve 
por defecto, esto levantará el servidor en http://localhost:8000



## probando las APIS
Listar todas las tareas
Realiza una solicitud GET a:
http://localhost:8000/api/tasks 

## Crear una tarea
Realiza una solicitud POST a:
http://localhost:8000/api/tasks 
### JSON
{
  "title": "Tarea 1",
  "description": "Descripción de la tarea1",
  "status": "Pendiente",
  "created_at": "2024-11-27",
    "updated_at": "2024-11-27"
} 

## Actualizar una tarea
Realiza una solicitud PUT a:
http://localhost:8000/api/tasks/1

## Eliminar una tarea
Realiza una solicitud DELETE a:
http://localhost:8000/api/tasks/1



[Ver el video](https://drive.google.com/file/d/1vbtoCwJWShZA9kzn3mUnnSc5VwWHXG5r/view?usp=sharing) 


## Frontend - Nuxt.js 
- Instalaremos Axios para consumir la API de Laravel: 
- npm install @nuxtjs/axios  
  npm run dev

Explicación breve de las decisiones técnicas que tome durante el desarrollo 

# Proyecto de Tareas con Vue.js, Nuxt.js y Laravel

Este proyecto es una aplicación de gestión de tareas utilizando Vue.js y Nuxt.js para el frontend, y Laravel para el backend. La aplicación permite crear, leer, actualizar y eliminar tareas de manera eficiente y con una interfaz intuitiva.

## Elección de Tecnología

### Frontend: Vue.js / Nuxt.js
- **Vue.js**: Elegí Vue.js para el desarrollo del frontend debido a su facilidad de integración y su curva de aprendizaje relativamente baja. Vue.js es altamente eficiente para la creación de interfaces reactivas.
- **Nuxt.js**: Utilicé Nuxt.js para mejorar la experiencia de desarrollo, ofreciendo características como el renderizado del lado del servidor (SSR) y la creación automática de rutas.

### Backend: Laravel
- **Laravel**: Elegí Laravel como framework backend debido a su robustez, facilidad de uso, y la extensa documentación y comunidad que lo respalda. Laravel es un framework PHP que sigue el patrón MVC (Modelo-Vista-Controlador), lo que facilita la organización del código, la escalabilidad y el mantenimiento del proyecto.

## Desarrollo de la Interfaz de Usuario (UI)
- Utilicé un enfoque de diseño limpio y simple para la interfaz de usuario (UI), con colores suaves, bordes redondeados y botones con interacciones de hover para hacer la experiencia más intuitiva y agradable.
- Implementé **Responsive Design**, asegurando que la aplicación sea accesible desde dispositivos móviles y de escritorio sin necesidad de mayores ajustes.

## Rutas y Controladores

### Rutas RESTful en Laravel
Las rutas de la API siguen el estilo **RESTful** para manejar las solicitudes HTTP de tipo GET, POST, PUT y DELETE, necesarias para gestionar las tareas:

- **GET /tasks**: Obtiene todas las tareas.
- **GET /tasks/{id}**: Obtiene una tarea específica.
- **POST /tasks**: Crea una nueva tarea.
- **PUT /tasks/{id}**: Actualiza una tarea existente.
- **DELETE /tasks/{id}**: Elimina una tarea.

## Elección de la Base de Datos: MySQL
- **MySQL**: Elegí MySQL como sistema de gestión de bases de datos debido a su popularidad, robustez y flexibilidad. Es una base de datos relacional que se integra perfectamente con Laravel.


[Ver el video](https://drive.google.com/file/d/1iLi80jCp4uyGSPEN3AFaVDH35n3Wq1hu/view?usp=sharing)


