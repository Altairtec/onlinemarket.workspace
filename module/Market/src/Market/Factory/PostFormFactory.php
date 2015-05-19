<?php

namespace Market\Factory;

use Market\Form\PostForm;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostFormFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceManager) {
        $categories = $serviceManager->get('categories');

        $form = new PostForm();
        $form->setCategories($categories);
        //$form->setCategories($sm->get('application-categories'));
	$form->setExpireDays($serviceManager->get('market-expire-days'));
	$form->setCaptchaOptions($serviceManager->get('market-captcha-options'));		
        $form->setInputFilter($serviceManager->get('market-post-filter'));
        $form->buildForm();   
        
        return $form;
    }

}
