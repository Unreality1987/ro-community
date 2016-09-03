<?php

namespace News\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use News\Model\NewsTable;

class NewsControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
                      
        $table = $container->get(NewsTable::class);
                      
        return new NewsController($table);
    }
}

?>
