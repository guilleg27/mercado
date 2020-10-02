<p align="center">
    <h1 align="center">API Mercado</h1>
    <br>
</p>

BACK
- PHP. Framework yii2
- Mini api rest de productos que controle alta baja y modificacion desde URL's
- Base de datos MYSQL
- Datos: id, nombre producto, precio en pesos.

Para mostrar los datos: usar una clase a la que se le pasen los valores de la tabla y una nueva variable con la cotizacion del dolar.
Objetivo: que esta clase formatee el resultado, entregando precio en pesos y precio en dolares

FRONT
Trae el listado por javascript y display del mismo mostrando todos los valores inclusive el precio en dolares, con posibilidad de editar los valores que van en tabla y guardar.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources




INSTALLATION
------------
- Instalar mediante composer: composer install dentro de la carpeta del proyecto
- Ajustar la password de la db por la propia en el archivo config/db.php del proyecto
- Dentro del proyecto hay un script llamado DumpMercado.sql para crear la base de datos y la tabla correspondiente.

TEST ENDPOINT API
-----------------
GET (Get all products)
curl -i -H "Accept:application/json" "http://localhost/mercado/web/productos-rest/allproducts"

POST (create new product)
curl -i -H "Accept:application/json" -H "Content-Type:application/json" -XPOST "http://localhost/mercado/web/productos-rest/create" -d '{"nombre": "nombreproducto", "precio_ars": "500"}'


ENDPOINTS INTERFAZ WEB
-----------------------
Index: http://localhost/api/mercado/web/
Crear producto: http://localhost/mercado/web/productos/create




