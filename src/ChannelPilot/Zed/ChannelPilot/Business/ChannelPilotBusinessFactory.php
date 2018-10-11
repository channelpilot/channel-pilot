<?php

namespace ChannelPilot\Zed\ChannelPilot\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use ChannelPilot\Zed\ChannelPilot\ChannelPilotDependencyProvider;


/**
 * @method \ChannelPilot\Zed\ChannelPilot\ChannelPilotConfig getConfig()
 * @method \ChannelPilot\Zed\ChannelPilot\Persistence\ChannelPilotQueryContainer getQueryContainer()
 */
class ChannelPilotBusinessFactory extends AbstractBusinessFactory
{
    public function getCpExportFacade(){
        return $this->getProvidedDependency(ChannelPilotDependencyProvider::FACADE_CPEXPORT);
    }
}
