<?php

namespace SprykerEco\Zed\ChannelPilot\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use SprykerEco\Zed\ChannelPilot\Business\ChannelPilotBusinessFactory;

/**
 * @method \SprykerEco\Zed\ChannelPilot\Persistence\ChannelPilotQueryContainer getQueryContainer()
 * @method \SprykerEco\Zed\ChannelPilot\ChannelPilotConfig getConfig()
 */
class ChannelPilotCommunicationFactory extends AbstractCommunicationFactory
{
    public function getChannelPilotBusinessFactory()
    {
        return new ChannelPilotBusinessFactory;
    }
}
