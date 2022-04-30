<?php
use tests\dao\AlumnoDAO;

try 
{
    $alumno = AlumnoDAO::getObject( 'email = :email', [ ':email' => 'marcos.baldivia@prueba.com' ] );
    print toHtml( $alumno );
} 
catch ( Exception $e ) 
{
    print toHtml( $e );
}
