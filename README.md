# AngularJS
Práctica de AngularJS para el proyecto de integración

Cosas que hay que implementar;
- BDD donde situar los datos que se encuentran en "store-products.json", hacen falta varias tablas;
    - Una tabla para "product";
        - id_product
        - description
        - shine
        - price
        - rarity
        - hardness
        - faces
    - Una tabla para "reviews";
        - id_product, para relacionarla con "product"
        - id_reviews
        - stars
        - body
        - author
        - createdOn
    - Una tabla para "images";
        - id_product, para relacionarla con "product"
        - name, para después utilizarlo para crear los enlaces
- Poner a funcionar la web con la nueva configuración y consultas a lo anterior
- API Rest que algunas funcionalidades;
    - Lanzar un GET que devuelva el producto por su id.
    - Lanzar un POST para insertar una nueva review.
    - Lanzar un PUT para editar la descripción.
    - Lanzar un DELETE que elimine uno de los productos.
