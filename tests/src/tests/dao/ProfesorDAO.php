<?php
namespace tests\dao;

use framework\dao\db\DAODB;
use tests\model\Profesor;

class ProfesorDAO extends DAODB
{

    /**
     * 
     * @param Profesor $profesor
     */
    public function __construct( Profesor $profesor )
    {
        parent::__construct( $profesor );
    }
    
    /**
     *
     * @return string
     */
    public static function tableName():string
    {
        return 'profesores';
    }

    /**
     * 
     * @param array $data
     * @return Profesor
     */
    public static function dataToObject( array $data ): Profesor
    {}
    
    /**
     *
     * @return bool
     */
    public function insert(): bool
    {
        
    }
}
