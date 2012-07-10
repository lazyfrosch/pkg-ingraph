<?php

class inGraph_Provider_PlotsAction extends inGraphBaseAction
{
    public function executeWrite(AgaviRequestDataHolder $rd)
    {
        try {
            $plots = $this->getBackend()->fetchPlots(
                $rd->getParameter('host'),
                // Empty string as service represents host graph
                $rd->getParameter('service', '')
            );
        } catch (inGraph_XmlRpc_Exception $e) {
            return $this->setError($e);
        }
        $this->setAttribute('plots', $plots);
        return $this->getDefaultViewName();
    }
}