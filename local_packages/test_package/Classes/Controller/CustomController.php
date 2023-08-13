<?php

namespace CrossLink\TestPackage\Controller;

use CrossLink\TestPackage\Domain\Repository\SomethingRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

class CustomController extends ActionController
{

    public function showAction(): ResponseInterface {
        $somethings = $this->somethingRepository->findAll();
        $this->view->assign('controllerData', 'String from CustomController');
        $this->view->assign('somethings', $somethings->toArray());
        return $this->htmlResponse();
    }

    function __construct(
        public SomethingRepository $somethingRepository
    ) {}

}