<?php

namespace Market\Factory;

use Market\Controller\PostController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostControllerFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        
        $serviceManager = $serviceLocator->getServiceLocator();
        $categories = $serviceManager->get('categories');
        $postForm = $serviceManager->get('market-post-form');
   
        $postController = new PostController();
        $postController->setCategories($categories);
        $postController->setPostForm($postForm);
        $postController->setListingsTable($serviceManager->get('listings-table'));
        
        return $postController;
    }

}
