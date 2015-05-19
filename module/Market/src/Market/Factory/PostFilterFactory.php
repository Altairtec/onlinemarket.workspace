<?php

namespace Market\Factory;

use Market\Form\PostFilter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostFilterFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceManager) {
        $filter = new PostFilter();
        $filter->setCategories($serviceManager->get('categories'));
        //$filter->setCategories($sm->get('application-categories'));
	$filter->setExpireDays($serviceManager->get('market-expire-days'));
	        
        $filter->buildFilter();        
        return $filter;
    }

}
