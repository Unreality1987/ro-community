<?php

namespace News\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use News\Model\NewsTable;


class NewsController extends AbstractActionController
{  
    private $table;
    
    public function __construct(NewsTable $table) {
        $this->table = $table;
    }   
    
    public function indexAction() {
                        
        return new ViewModel([
            'news' => $this->table->fetchAll(),
            'title'     => 'News',
        ]);
    }
    
}

?>
