<?php
namespace tests\model;

use framework\dao\DAO;
use framework\dao\Persistent;
use tests\dao\MateriaDAO;

class Materia extends Persistent
{

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $nombre;

    /**
     * 
     * @param int $uid
     */
    public function __construct( int $uid, string $codigo, string $nombre )
    {
        parent::__construct( $uid );
        $this->codigo( $codigo );
        $this->nombre( $nombre );
    }
    
    /**
     *
     * @param DAO $dao
     * @return DAO
     */
    protected function daoImplement( DAO $dao ): DAO
    {
        return new MateriaDAO( $this );
    }

    /**
     * 
     * @param string $nombre
     * @return string
     */
    public function nombre( string $nombre = NULL ): string
    {
        if( isset( $nombre ) )
        {
            $this->nombre = $nombre;
        }
        return $this->nombre;
    }
    
    /**
     * 
     * @param string $codigo
     * @return string
     */
    public function codigo( string $codigo = NULL ): string
    {
        if( isset( $codigo ) )
        {
            $this->codigo = $codigo;
        }
        return $this->codigo;
    }
    
}
