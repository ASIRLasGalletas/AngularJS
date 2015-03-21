# AngularJS
Práctica de AngularJS para el proyecto de integración

To Do:
 - Entidades (ORM):
    - Product
       - id (predeterminado Doctrine): autoincrement
       - description: text
       - shine: int
       - price: decimal
       - rarity: int
       - hardness: int
       - faces: int
    - Review
       - product: (n:1) -> Product
       - id (predeterminado Doctrine): autoincrement
       - stars: smallint
       - body: text
       - author: string (255)
       - createdOn: datetime
    - Imagenes
       - product: (n:1) -> Product
       - name: string (32)
 - API Rest
    - Product list
       - GET /api/product/
    - Review list
       - GET /api/product/[id]/review/
    - Product
       - GET /api/product/[id]/
       - PUT /api/product/[id]/
       - DELETE /api/product/[id]/
    - Review
       - POST /api/product/[id]/review/
 - CSS
    - Usar unidades relativas en lugar de fijas (pixeles)
    - Mejorar el responsive de la maquetación con el uso de grillas y
       clases de Bootstrap

