<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Controller\ViewController;

class ViewControllerFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        
        $serviceManager = $serviceLocator->getServiceLocator();
        //$categories = $serviceManager->get('categories');
        //$postForm = $serviceManager->get('market-post-form');
   
        
        $viewController = new ViewController();
        //$viewController->setCategories($categories);
        //$viewController->setPostForm($postForm);
        $viewController->setListingsTable($serviceManager->get('listings-table'));
        //$viewController->setCategories($categories);
   
        return $viewController;
    }

}
