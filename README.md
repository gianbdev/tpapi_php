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

# Paso 6:
* Ejecutar las migraciones

```path
    php artisan migrate
```

# Paso 7:
* Ejecutar el api

```path
    php artisan serve
```
# Paso 8:
* Ir a `localhost:8000/api/documentation` para acceder a SwaggerUi

# Documentación de la API de Gestión de Tareas

## Descripción
Esta API permite la gestión de tareas, incluyendo la creación, actualización, obtención y eliminación de tareas.

## Endpoints

### 1. Obtener Todas las Tareas
- **Método:** `GET`
- **Endpoint:** `/GetAllTasks`
- **Descripción:** Devuelve una lista de todas las tareas.
- **Ejemplo de Uso:**
* `localhost:8000/api/GetAllTasks` para ver todas las tareas

### 2. Crear una Nueva Tarea
- **Método:** `POST`
- **Endpoint:** `/SaveTasks`
- **Descripción:** Crea una nueva tarea.
- **Cuerpo de la Solicitud:**
  ```json
  {
      "title": "Título de la tarea",
      "description": "Descripción de la tarea"
      "due_date": "date"
      "completed": "boolean 1|0"
  }

### 3. Obtener Tarea por ID
- **Método:** `GET`
- **Endpoint:** `/GetTasks/{id}`
- **Descripción:** Devuelve los detalles de una tarea específica.
- **Ejemplo de Uso:**
  * Accede a: `http://localhost:8000/api/GetTasks/1` para obtener la tarea con ID 1.

### 4. Actualizar Tarea por ID
- **Método:** `PUT`
- **Endpoint:** `/UpdateTasks/{id}`
- **Descripción:** Actualiza los detalles de una tarea existente.
- **Cuerpo de la Solicitud:**
  * Accede a: `http://localhost:8000/api/UpdateTasks/1`
  ```json
  {
      "title": "Título actualizado",
      "description": "Descripción actualizada"
      // etc
  }

### 5. Eliminar Tarea por ID
- **Método:** `DELETE`
- **Endpoint:** `/DeleteTasks/{id}`
- **Descripción:** Elimina una tarea específica.
- **Ejemplo de Uso en Postman:**
  1. Selecciona `DELETE` como método.
  2. URL: `http://localhost:8000/api/DeleteTasks/1` (reemplaza `1` con el ID de la tarea que deseas eliminar).
