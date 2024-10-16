# Prueba practica Laravel

## Sistema de concesionario de automoviles

Prueba Practica para desarrollador full stack con Laravel y PostgreSQL

Para ejecutar el proyecto debes tener los siguientes requitos

* PHP versión >= 8.1 
* Composer versión >= 2.8.1
* Node versión >= 20.1
* PostgreSQL versión >= 10

En el archivo php.ini debes tener descomentado la extensión para establecer una conexión con una base de datos PostgreSQL
```bash
extension=pdo_pgsql
```

Una vez descargado el sistema se debe cambiar el nombre del archivo .env.example a .env y modificar la credenciales  de la Base de datos PostgreSQL

```php
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Despues debes ingregar el siguente comando para descargar las dependencia de laravel

```bash
Composer install
```

Luego en otra consola debes ingresar el siguente comando para descargar las dependencia de Laravel Breeze

```bash
npm install
```

Ejecutamos las migraciones a la Base de datos
```bash
php artisan migrate
```

Ejecutamos el seeder para agregar datos a la Base de datos
```bash
php artisan db:seed --class=CarSeeder
```

Asegurate de que las tablas y los datos se encuentren en la Base de datos PostgreSQL

Ejecutamos este comando para generar una key en laravel
```bash
php artisan key:generate
```

Por ultimo para levantar el proyecto ingresamos el siguente comando 
```bash
php artisan serve
```

y para levantar el breezer del proyecto en otra consola ingresa el siguiente comando 
```bash
npm run dev
```


## License

[MIT](https://choosealicense.com/licenses/mit/)