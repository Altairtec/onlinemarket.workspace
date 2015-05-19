<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        
        $serviceManager = $serviceLocator->getServiceLocator();
        //$categories = $serviceManager->get('categories');
        //$postForm = $serviceManager->get('market-post-form');
        
        $indexController = new IndexController();
        //$indextController->setCategories($categories);
        //$indextController->setPostForm($postForm);
        $indexController->setListingsTable($serviceManager->get('listings-table'));
        //$indexController->setCategories($categories);
        
        return $indexController;
    }

}
