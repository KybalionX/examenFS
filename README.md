# Backend
Primero, debemos ejecutar el siguiente comando sql en el gestor de bases de datos de nuestra preferencia:

CREATE DATABASE backend;

el cual permitirá crear la base de datos necesaria para poder realizar las migraciones necesarias

Posterior a ello, debemos cambiar las variables de conexion de .env para poder conectarnos a la base de datos

Luego, ejecutar el comando:

php artisan make:migration

lo cual insertará las tablas necesarias en la base de datos

y después:

php artisan db:seed

para que nuestros seeders se inserten en las tablas

# Frontend
Se debe abrir una terminal a la ruta examenFS/frontend, y ejecutar el comando ng serve --o, que permitirá iniciar el frontend
