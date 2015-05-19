<?php

namespace Market\Controller;

trait ListingsTableTrait
{
	private $listingsTable;
	
	public function setListingsTable($listingsTable)
	{
		$this->listingsTable = $listingsTable;		
	}
}