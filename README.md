
## PRUEBA DESARROLLO PHP, JS Y MYSQL

1- Crea un repositorio en gitlab.

- Crea tres ramas main, dev, release.
- Crea un fichero readme que lo contengan las 3 ramas. El fichero readme contendrá la descripción del ejercicio.
- Crea la rama del ejercicio “crud_notas”  

2- Realiza el siguiente ejercicio (php y mysql)
En la empresa **“Reciclados 3R”** tenemos diferentes usuarios que pueden acceder a la aplicación. Los departamentos a los que pueden pertenecer son:

- Atención al cliente
- Recursos Humanos
- Comercial
- Limpieza
- Planta de reciclaje

Y cada usuario puede tener un único rol:

- Jefe
- Responsable de equipo
- Empleado

Necesitamos tener un login y un CRUD para guardar las diferentes notas que se recogerán desde las llamadas telefónicas que nos realizarán los clientes a través de la centralita de la empresa. Contemplará las diferentes vistas que necesitamos en un CRUD.

En la vista CREATE el formulario guardará la nota con los siguientes campos:

- el empleado que abre la nota. Será el usuario logueado.
- el departamento al que va dirigida la nota.
- una descripción de lo hablado con el cliente
- el cliente que realiza la llamada (nombre, empresa a la que pertenece y teléfono de contacto)
- la fecha y hora en la que se crea la nota.
- fecha y hora en la que se guarda la nota (en este caso null)
- fecha y hora en la que se elimina la nota ( en este caso null)
- fecha y hora en la que se reactiva la nota ( en este caso null)
- Estado ( Pendiente, En Proceso, Terminado). Siempre se realizará la creación en el estado pendiente.

Ese formulario será accesible sólo para los usuarios de la aplicación que pertenezcan al departamento “Atención al cliente”. Al resto se les mostrará una notificación que muestre “No tiene permisos”.

En la vista UPDATE, sólo podrá realizarse el cambio en:
- la descripción(sólo si es la persona que creó la nota, su responsable o el jefe)
- el estado(que podrá cambiarlo cualquier empleado).

- En este caso, también aparecerá el campo  ibservaciones por si tienen que añadir alguna observación. En este caso, necesitamos saber la última vez que se actualizó la nota.

**Restricciones.**

Ese formulario será accesible sólo para los usuarios de la aplicación que pertenezcan al departamento al que va dirigida la nota y sólo si su rol es jefe o responsable de equipo.

Al resto se les mostrará una notificación que muestre “No tiene permisos”. Cuando realicemos DELETE se pedirá confirmación al usuario y sólo podrá realizar el
borrado si pertenece al departamento de Atención al cliente y es responsable o jefe.

Tener en cuenta que no se realizará un delete si no que en este caso necesitamos conservar las notas y sólo guardar la fecha en la que se realizó el borrado.
Por último, la vista READ mostrará una tabla con todas las notas creadas donde aparecerá una tabla que mostrará un filtro para poder filtrar por cliente o descripción.

**Restricciones.**

La tabla se verá por todos los usuarios pero cada departamento verá sus notas asociadas. Es decir, sólo el departamento Comercial verá las notas asociadas al
departamento comercial. Sólo el rol jefe y el departamento Atención al cliente verá todas las notas.
Mostrará los siguientes campos de la nota: código de la nota, nombre del empleado, nombre del cliente, empresa del cliente, teléfono del cliente, estado, descripción (Sólo los primeros 10 caracteres). En cada fila se verá un botón para poder actualizar la nota
o borrar (en este caso, sólo podrá borrar el  departamento de Atención al cliente y sólo si es responsable o jefe por lo que sólo para ellos se verá activo) Si la nota tiene observaciones se mostrará un icono pequeño al lado del código. Elige el icono que quieras y que defina lo que quiere identificar por ejemplo un bloc de notas.

En la tabla se mostrarán todas las notas. Se  diferenciarán los registros eliminados mostrando su fila en rojo, sin botones de actualizar ni de eliminar.

## PLUS DE EJERCICIO
- Añadir en la vista READ un botón Activar para que las notas eliminadas puedan estar activas de nuevo. La tabla de notas tendrá activo el campo Reactivada. Si vuelve a eliminarse el campo reactivada no estará activo en la tabla y la fecha y hora de reactivación se eliminará. Sólo podrán hacerlo los responsables del departamento al que pertenezca la nota. Aparecerá una notificación para confirmar si quiere activar la
nota.
- Diferenciar las filas de las tablas por diferentes colores según el estado.

color azul: pendiente

Color naranja: En proceso

Color verde: terminada

Color rojo: Eliminada.

Si la nota es una nota reactivada poner un icono delante del código

- Implementación de test.

3- Realiza una Merge Request de la rama del ejercicio a la rama release.

Ten en cuenta que la creación de las tablas también tendrán que poder valorarse por lo que añade una carpeta para añadir sql. Es importante que todo lo que consideres quede versionado en el ejercicio. Igual que los datos que hayas utilizado para realizar
las pruebas.

4- Da acceso a azucena.martin@x-netdigital.com para poder revisar el ejercicio.
