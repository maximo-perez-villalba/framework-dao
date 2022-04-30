<?php
namespace tests\dao;

use framework\dao\DAODB;
use tests\model\Alumno;

class AlumnoDAO extends DAODB
{

    /**
     * 
     * @param Alumno $alumno
     */
    public function __construct( Alumno $alumno )
    {
        parent::__construct( $alumno );
    }

    /**
     * 
     * {@inheritDoc}
     * @see \framework\dao\DAO::object()
     * @return Alumno
     */
    public function object(): Alumno
    {
        return parent::object();
    }
    
    /**
     * 
     * @return string
     */
    public static function tableName():string
    {
        return 'alumnos';
    }

    /**
     * 
     * @param array $data
     * @return Alumno
     */
    public static function dataToObject( array $data ): Alumno
    {
        return new Alumno(
            $data[ 'uid' ], 
            $data[ 'nombres' ], 
            $data[ 'apellidos' ], 
            $data[ 'email' ]
        );
    }

    /**
     * 
     * @return bool
     */
    public function insert(): bool
    {
        
        $sqlQuery = 'INSERT INTO ';
        $sqlQuery .= self::tableName();
        $sqlQuery .= ' (nombres, apellidos, email)';
        $sqlQuery .= ' VALUES (:nombres, :apellidos, :email)';
        $statement = self::connection()->prepare( $sqlQuery );
        
        $parameters = [
            ':nombres' => $this->object()->nombres(),
            ':apellidos' => $this->object()->apellidos(),
            ':email' => $this->object()->email()
        ];
        
        $results = $statement->execute( $parameters );
        
        /*
         * Asigna el identificador de bd
         */
        $this->object()->uid( self::connection()->lastInsertId() );
        
        return $results;
        
    }
    
    public function update(): bool
    {
        return TRUE;
    }
    
    /**
     *
     * @param string $email
     * @return array
     */
    static public function readByEmail( string $email ): array
    {
        return self::read( 'email = :email', [ ':email' => $email ] );
    }

    /**
     * 
     * @param string $pattern
     * @return Persistent[]
     */
    static public function ListByEmail( string $pattern ): array
    {
        return self::list( 'email LIKE :pattern', [ ':pattern' => $pattern ] );
    }
    
}