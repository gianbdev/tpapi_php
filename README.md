### Instalation

# Paso 1:
* Clonar el repositorio
```path
    git clone https://github.com/gianbdev/tpapi_php
```


# Paso 2:
* Instalar las dependencias

```path
    composer install
```

# Paso 3
* crear un .env en tu_api/.env
```path
    touch .env
```

# Paso 4
* Generar un app key
```path
    php artisan app:key generate
```

# Paso 5
* crear una base de datos en el .env

```path
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=prueba_db
    DB_USERNAME=root
    DB_PASSWORD=
```

# Paso 5:
* Ejecutar las migraciones

```path
    php artisan migrate
```

# Paso 5:
* Ejecutar el api

```path
    php artisan serve
```
# Paso 5:
* Ir a `localhost:8000/api/documentation` para acceder a SwaggerUi
