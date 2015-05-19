<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Model\ListingsTable;

class ListingsTableFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceManager)
	{
		return new ListingsTable(ListingsTable::$tableName, 
				$serviceManager->get('general-adapter'));		
	}	
}