<?php
namespace framework\dao;

abstract class Persistent
{
    
    /**
     * 
     * @var int
     */
    private $uid = 0; 
    
    /**
     * 
     * @var DAO
     */
    private $dao = NULL;

    /**
     * Default constructor
     * 
     * @param int $uid
     */
    public function __construct( int $uid )
    {
        $this->uid = $uid;
    }

    /**
     * 
     * @return DAO
     */
    public function dao(): DAO
    {
        if( is_null( $this->dao ) )
        {
            $this->dao = $this->daoFactory();
        }
        return $this->dao;
    }
    
    /**
     * 
     * @param int|NULL $uid
     * @return int
     */
    public function uid( int $uid = NULL ): int
    {
        if( isset( $uid ) )
        {
            $this->uid = $uid;
        }
        return $this->uid;
    }
    
    /**
     * 
     * @return DAO
     */
    protected abstract function daoFactory(): DAO;
    
}