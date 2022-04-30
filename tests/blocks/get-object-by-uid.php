<?php
use tests\dao\AlumnoDAO;

try 
{
    $alumno = AlumnoDAO::getObjectByEmail( 'marcos.baldivia@prueba.com' );
    
    if( is_null( $alumno ) )
    {
        print "<h6>You should probably run DAO::create.</h6>";
        print '<hr>';
    }
    else 
    {
        $alumno = AlumnoDAO::getObjectByUid( $alumno->uid() );
    }

    print toHtml( $alumno );
} 
catch ( Exception $e ) 
{
    print toHtml( $e );
}