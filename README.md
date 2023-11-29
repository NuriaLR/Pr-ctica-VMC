Practica 1.

Realizar un proyecto con MVC sin la implementacion del modelo.

Se deben utilizar los datos del array $datos contenidos en el fichero datos.php.

Se deben tratar todos los casos posibles siguiendo los criterios de evaluacion establecidos.

Criterios de evaluacion:
- Aspectos generales:
    + Se deben mostrar estilos en todas las partes de la web.
    + Se debe crear un controlador frontal que gestione la logica principal:
        * Se deben diferenciar casos con y sin variables en la URL.
    + Se debe crear interfaz controller con los metodos necesarios para un crud.
    + Se debe crear un controlador por cada elemento de categoria (juegos, clientes, compras).
    + Se debe crear una vista por cada parte del CRUD correspondiente.
    + Se deben utilizar variables globales para el +tratamiento de los datos.
    + Se debe poder eliminar y crear elementos en el array existente (se asume que al volver a iniciar una vista, vuelve el contenido original).
    + Se deben mostrar mensajes de error en caso de no realizarse correctamente algun caso.

- CRUD clientes
    + Se debe crear un filtro en el index para ordenar los clientes por su identificador.

    HECHO

- CRUD compras
    + Se debe mostrar en la tabla el nombre del juego.
    + Se debe mostrar en la tabla el nombre del cliente.
    + Se debe mostrar en la tabla el total pagado por la compra.

    HECHO

- CRUD juegos
    + Se debe crear un filtro en el index para mostrar los juegos por categoria (accion, aventuras, deportes).
    + Se debe crear un filtro en el index para ordenar los juegos por precio.
    + Se deben poder mostrar los juegos por categoria y ordenados por precio.

    HECHO


NOTA: se evaluaran distintos casos en la correccion:
- Implementacion incorrecta de variables en la URL relacionadas con funciones del controlador.
- Implementacion incorrecta de variables en la URL relacionadas con controladores.
- Pruebas con valores incorrectos en tipo y forma en los formularios.
- Otros casos de mal funcionamiento.

CLIENTES: EDITA, ELIMINA Y CREA
JUEGOS: NO EDITA, SI ELIMINA, NO CREA
COMPRAS: NO EDITA, SI ELIMINA, NO CREA