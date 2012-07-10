<?php

class Default_Error404SuccessView extends IcingaDefaultBaseView
{
    public function executeHtml(AgaviRequestDataHolder $rd)
    {
        $this->setAttribute('_title', '404 Not Found');

        $this->setupHtml($rd);

        $this->getResponse()->setHttpStatusCode('404');
    }
}

