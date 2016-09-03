<?php

namespace News\Model;

use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\Sql\Select;

class NewsTable 
{
    private $tableGateway;
    
    public function __construct(TableGatewayInterface $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select(function (Select $select) {
                        $select->order('datetime DESC');
                    }); 
        return $resultSet;         
                    
    }
    
    public function fetch($id)
    {
        return $this->tableGateway->select(array('id' => $id));
                
    }
    
}
?>
