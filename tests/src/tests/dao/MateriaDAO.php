<?php
namespace tests\dao;

use framework\dao\db\DAODB;
use tests\model\Materia;

class MateriaDAO extends DAODB
{

    /**
     * 
     * @param Materia $materia
     */
    public function __construct( Materia $materia )
    {
        parent::__construct( $materia );
    }
    
    /**
     *
     * @return string
     */
    public static function tableName():string
    {
        return 'materias';
    }

    /**
     * 
     * @param array $data
     * @return Materia
     */
    public static function dataToObject( array $data ): Materia
    {}
    
    /**
     *
     * @return bool
     */
    public function insert(): bool
    {
        
    }
}
