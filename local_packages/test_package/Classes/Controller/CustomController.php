<?php

namespace CrossLink\TestPackage\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class CustomController extends ActionController
{

    public function showAction(): ResponseInterface {
        $this->view->assign('controllerData', 'String from CustomController');
        return $this->htmlResponse();
    }

}