<?php

namespace ChannelPilot\Zed\ChannelPilot\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use ChannelPilot\Zed\ChannelPilot\Business\ChannelPilotBusinessFactory;

/**
 * @method \ChannelPilot\Zed\ChannelPilot\Persistence\ChannelPilotQueryContainer getQueryContainer()
 * @method \ChannelPilot\Zed\ChannelPilot\ChannelPilotConfig getConfig()
 */
class ChannelPilotCommunicationFactory extends AbstractCommunicationFactory
{
    public function getChannelPilotBusinessFactory()
    {
        return new ChannelPilotBusinessFactory;
    }
}
