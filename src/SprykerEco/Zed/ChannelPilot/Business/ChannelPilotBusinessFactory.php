<?php

namespace SprykerEco\Zed\ChannelPilot\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use SprykerEco\Zed\ChannelPilot\ChannelPilotDependencyProvider;


/**
 * @method \SprykerEco\Zed\ChannelPilot\ChannelPilotConfig getConfig()
 * @method \SprykerEco\Zed\ChannelPilot\Persistence\ChannelPilotQueryContainer getQueryContainer()
 */
class ChannelPilotBusinessFactory extends AbstractBusinessFactory
{
    public function getCpExportFacade(){
        return $this->getProvidedDependency(ChannelPilotDependencyProvider::FACADE_CPEXPORT);
    }
}
