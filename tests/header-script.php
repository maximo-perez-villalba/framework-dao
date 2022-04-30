<?php
include_once( dirname( __DIR__ ).'/vendor/autoload.php' );
use framework\environment\Env;
Env::init( '/app-config.php' );

function toHtml( $something ): string
{
    $html = '<pre style="with:100%;">';
    if( is_null( $something ) )
    {
        $html .= 'NULL';
    }
    else
    {
        $html .= print_r( $something, TRUE );
    }
    $html .= '</pre>';
    return $html;    
}
