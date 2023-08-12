<?php

namespace CrossLink\TestPackage\EventListener;

use TYPO3\CMS\Core\Page\Event\BeforeJavaScriptsRenderingEvent;

final class JavaScript
{

    public function __invoke( BeforeJavaScriptsRenderingEvent $event ) {
        $event->getAssetCollector()->addInlineJavaScript( 'crossLinkInlineJavaScript1', 'console.log("Hello from inline JS added in event listener")');
    }

}