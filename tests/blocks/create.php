<?php 
use tests\model\Alumno;

$alumnoA = new Alumno( 0, 'Marcos', 'Baldivia', 'marcos.baldivia@prueba.com' );

$alumnoA->dao()->insert();

print toHtml( $alumnoA );
