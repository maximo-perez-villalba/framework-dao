# framework-dao
El proyecto implementa un framework liviano de persistencia orientado a objectos escrito en PHP. 
El framework esta basado en el patrón de diseño DAO (Data Access Object) y aunque su principal fin es pedagógico, el framework es completamente funcional.


## Instalación
Se puede instalar `framework-dao` a través de Composer.

1. Desde una consola de comandos ir al directorio del proyecto y ejecutar:
```
composer require maximo-perez-villalba/framework-dao
```

2. También agregando en el archivo `composer.json`, dentro de la sección  `"require"`.
```
"require": {
  "maximo-perez-villalba/framework-dao": ">=1.0.0"
},
```
Luego desde una consola de comandos ejecutar:
```
composer update
```

## Documentación


### Patrón DAO
El patrón DAO propone una solución al problema de persistir **objetos** en distintos medios de almacenamiento como son xml, json, bases de datos, etc. Buscando independizar **los objetos del modelo** de **los medios concretos donde se persisten** y permitiendo la cohexistencia de multiples medios de almacenamiento paralelos.

Al hablar de persistencia de objetos, son 4 las operaciones elementales que son necesarias: 
* **Guardar** un nuevo objeto
* **Leer** uno o una lista objectos
* **Actualizar** un objeto
* **Eliminar** un objeto

Operaciones conocidas por sus siglas en ingles CRUD (Create, Read, Update, Delete).

La implementación del patrón DAO esta basado en el patrón estructural [Decorator](https://es.wikipedia.org/wiki/Decorator_(patr%C3%B3n_de_dise%C3%B1o)). De tal manera que los objetos DAO envuelven a los objetos del modelo. Permitiendo de esta manera un bajo nivel de acoplamiento de **los objetos del modelo** con **los objetos DAO** que saben como se persisten.

![image:uml-clas-dao-pattern.png](/docs/uml-class-dao-pattern.png)

El diagrama de clases muestra el diseño de implementación del patrón DAO, poniendo todo el comportamiento CRUD dentro de la clase **DAO** y requiriendo de **los objetos del modelo** extender de la clase [Persistent](/src/framework/dao/Persistent.php) (persistible).
```
<?php
// 
$dao = new DAO( $objectPersistent );
// o también puedo obtener el objeto de la clase DAO desde el objeto persistible, a través del método dao(). 
$dao = $objectPersistent->dao();

//
$dao->create();

//
$dao->update();

//
$dao->delete();

```

### Extensión DAO para bases de datos DAODB

![image:uml-class-dao-db.png](/docs/uml-class-dao-db.png)





#### DAODB::create

##### UML diagram sequence
![image:uml-sequence-daodb-create.png](/docs/uml-sequence-daodb-create.png)

##### PHP script sequence
```
<?php
$alumno = new Alumno( 0, 'Azalea', 'Rojas', 'azalea.rojas@prueba.com' );
{
  $dao = $this->dao();
  $dao->create()
  {
    $this->insert()
    {
      $conn = $this->connection();    
      $statement = $conn->prepare($sqlQuery);
      $statement->execute( $parameters );
      $statement->closeCursor();
      $lastUid = $conn->lastInsertId();
      $this->object()->uid($lastUid);
    }
  }
}
```
