<?php
namespace tests\model;

use framework\dao\DAO;
use framework\dao\Persistent;
use tests\dao\ProfesorDAO;

class Profesor extends Persistent
{
    
    /**
     * @var string
     */
    private $nombres;
    
    /**
     * @var string
     */
    private $apellidos;
    
    /**
     * @var string
     */
    private $email;
    
    /**
     *
     * @param int $uid
     */
    public function __construct( int $uid, string $nombres, string $apellidos, string $email )
    {
        parent::__construct( $uid );
        $this->nombres( $nombres );
        $this->apellidos( $apellidos );
        $this->email( $email );
    }
    
    /**
     *
     * @param DAO $dao
     * @return DAO
     */
    protected function daoImplement( DAO $dao ): DAO
    {
        return new ProfesorDAO( $this );
    }
    
    /**
     *
     * @param string $nombres
     * @return string
     */
    public function nombres( string $nombres = NULL ): string
    {
        if( isset( $nombres ) )
        {
            $this->nombres = $nombres;
        }
        return $this->nombres;
    }
    
    /**
     *
     * @param string $apellidos
     * @return string
     */
    public function apellidos( string $apellidos = NULL ): string
    {
        if( isset( $apellidos ) )
        {
            $this->apellidos = $apellidos;
        }
        return $this->apellidos;
    }
    
    /**
     *
     * @param string $email
     * @return string
     */
    public function email( string $email = NULL ): string
    {
        if( isset( $email ) )
        {
            $this->email = $email;
        }
        return $this->email;
    }
}
