# ByteFix-Shop

## Descripción del Proyecto

Este proyecto es un ejemplo básico diseñado para mostrar mis habilidades en el uso del framework Laravel. Utiliza MySQL para la persistencia de datos, el almacenamiento de Laravel para guardar imágenes y Bootstrap para el diseño y estilo visual.

El proyecto simula una tienda virtual donde los clientes pueden explorar y filtrar productos de una empresa a través de diferentes categorías.

Además, el proyecto cuenta con rutas protegidas a las que solo el administrador puede acceder mediante un formulario de inicio de sesión. Desde allí, el administrador puede añadir nuevos productos, subir imágenes, actualizar información y eliminar productos que ya no estén disponibles.


## Rutas

### Rutas Públicas

- **GET**: `/`  
  - Descripción: Página de inicio de la aplicación.
  - URL de acceso: `http://127.0.0.1:8000/`

- **GET**: `/laptos`  
  - Descripción: Filtro de busqueda, devuelve solo la categoria de laptos.
  - URL de acceso: `http://127.0.0.1:8000/laptos`

- **GET**: `/mouses`  
  - Descripción: ""
  - URL de acceso: `http://127.0.0.1:8000/mouses`

- **GET**: `/keyboards`  
  - Descripción: ""
  - URL de acceso: `http://127.0.0.1:8000/keyboards`

- **GET**: `/admin/login`  
  - Descripción: "Formulario de login, vista."
  - URL de acceso: `http://127.0.0.1:8000/admin/login`
    
### Rutas Protegidas

- **GET**: `/admin/new-product`  
  - Descripción: "Vista para poder dar de alta equipos."
  - URL de acceso: `http://127.0.0.1:8000/admin/new-product`

- **GET**: `/admin/new-category`  
  - Descripción: "Vista para poder dar de alta nuevas categorias."
  - URL de acceso: `http://127.0.0.1:8000/admin/new-category`

## Vista publica
![raiz](https://github.com/user-attachments/assets/efb3800d-0cb1-4158-9b50-db3fb1ce521d)

## Vista privada(admin)
![login](https://github.com/user-attachments/assets/4683defa-76b5-434a-b651-85206a119111)
![admin](https://github.com/user-attachments/assets/6665a884-cfbc-40e4-b2d8-0870112d02c5)
![newProduct](https://github.com/user-attachments/assets/0aab4f53-3183-413b-bb18-6168e082df51)
![newCategory](https://github.com/user-attachments/assets/9692af97-b892-4978-9109-3bcd352627bd)



    





