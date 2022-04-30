<?php
use tests\dao\AlumnoDAO;

try 
{
    $alumno = AlumnoDAO::getObjectByUid( 2 );
    print toHtml( $alumno );
} 
catch ( Exception $e ) 
{
    print toHtml( $e );
}
