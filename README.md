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

![UML Classes Diagram](/docs/uml-class-dao-pattern.png)

### Extensión DAO para bases de datos DAODB

![UML Classes Diagram](/docs/uml-class-dao-db.png)


### UML Sequence Diagram > DAODB::create
![UML Sequence Diagram](/docs/uml-sequence-daodb-create.png)
```
<?php
$alumno = new Alumno( 0, 'Azalea', 'Rojas', 'azalea.rojas@prueba.com' );
> $dao = $alumno->dao();
> $dao->create();
>> $dao->insert();
>>> $conn = $dao->connection();
>>>> $statement = $conn->prepare($sqlQuery);
>>>> $statement->execute( $parameters );
>>>> $statement->closeCursor();
>>> $lastUid = $conn->lastInsertId();
$alumno->uid($lastUid);
```
