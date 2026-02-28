# 📦 Catálogo de Productos en Laravel

Proyecto académico desarrollado en **Laravel** para gestionar un catálogo de productos con CRUD completo.  
Incluye migraciones, modelo, controlador, vistas Blade con layout, mensajes de éxito/error y diseño con Bootstrap.

## 🔹 Requisitos previos

Antes de instalar el proyecto, asegúrate de tener:

- **PHP** >= 8.1  
- **Composer** >= 2.x  
- **Laravel** versión 10 o superior  
- **MySQL/MariaDB** para la base de datos  
- **Git** para control de versiones  

## 🔹 Instalación

1. **Clonar el repositorio:**
   ```
   git clone https://github.com/TU_USUARIO/catalogo.git
   cd catalogo
   ```

2. **Instalar dependencias de PHP:**
   ```
   composer install
   ```
3. **Configurar el archivo .env:**
   Copia el archivo de ejemplo:
   ```
   cp .env.example .env
   ```
   Ajusta la conexión a la base de datos:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=catalogo_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **Ejecutar migraciones:**
   ```bash
   php artisan migrate
   ```

## 🔹 Ejecución del servidor local

Para levantar el servidor de desarrollo:
```bash
php artisan serve
```

Abrir en el navegador:
```
http://127.0.0.1:8000
```

## 🔹 Funcionalidades implementadas

- **Migraciones:** creación de la tabla `productos` con campos `nombre`, `descripcion`, `precio`, `stock`.  
- **Modelo:** `Producto` con atributos fillable.  
- **Controlador:** `ProductoController` con métodos `index`, `create`, `store`, `show`, `edit`, `update`, `destroy`.  
- **Rutas:** configuradas con `Route::resource('productos', ProductoController::class)`.  
- **Vistas Blade:**  
  - `index.blade.php` → listado de productos con tabla y acciones.  
  - `create.blade.php` → formulario para agregar productos.  
  - `edit.blade.php` → formulario para editar productos.  
  - `show.blade.php` → detalle de producto.  
  - `layouts.app.blade.php` → layout base con Bootstrap y barra de navegación.  
- **Mensajes de éxito/error:** alertas dinámicas al crear, editar o eliminar productos.  
- **Diseño mejorado:** uso de Bootstrap para tablas, formularios y botones.  
- **Botones de navegación:** cada vista incluye botón de “Volver al listado”.
