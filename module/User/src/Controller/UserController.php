<?php


namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
        $viewModel = new ViewModel();
        
        // TODO: Show own account informations
                
        return $viewModel;
    }
    
    public function settingsAction() {
        $viewModel = new ViewModel();
        
        // TODO: Show account settings
                
        return $viewModel;
    }
}
