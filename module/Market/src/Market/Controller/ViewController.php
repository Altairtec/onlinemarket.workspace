<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ViewController extends AbstractActionController {

    use ListingsTableTrait;

    public function indexAction() {
        $category = $this->params()->fromRoute('category');
        //$category = $this->params()->fromQuery('category');

        $listings = $this->listingsTable->getListingsByCategory($category);

        return new ViewModel(array('category' => $category, 'list' => $listings));
    }

    public function itemAction() {
        $itemId = $this->params()->fromRoute('itemId');
        //$itemId = $this->params()->fromQuery('itemId');

        $item = $this->listingsTable->getListingsById($itemId);

        if (!$itemId) {
            $this->flashMessenger()->addMessage('Item Not Found');

            return $this->redirect()->toRoute('market');
            //return $this->redirect()->toRoute('market/view/main');
        }

        return new ViewModel(array('itemId' => $itemId, 'item' => $item));
    }

}
