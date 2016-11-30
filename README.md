http://SRV[:PORT]/RUTA/CONTENEDOR/INDEX/1035/....
                       \_dispatcher (index.php)

                       - .htaccess
                       - webconfig.xml

# Controlador por defecto
- Carpeta application/config

```
autoload.php  -> linea 61 (necesario)
config.php    -> linea 317 (hash de alguna cadena y usarlo como clave para sesiones)
database.php  -> conexion a DB
constants.php -> 
routes.php    -> cambiar a home
```