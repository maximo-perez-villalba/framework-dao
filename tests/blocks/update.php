<?php
use tests\dao\AlumnoDAO;

try
{
    $alumno = AlumnoDAO::ListByEmail( 'marcos.baldivia@prueba.com' );
    
    print toHtml( $alumno );
}
catch ( Exception $e )
{
    print toHtml( $e );
}
