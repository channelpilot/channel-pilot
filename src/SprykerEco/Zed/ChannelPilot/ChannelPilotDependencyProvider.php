<?php

namespace SprykerEco\Zed\ChannelPilot;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class ChannelPilotDependencyProvider extends AbstractBundleDependencyProvider
{
    const FACADE_CPEXPORT = 'FACADE_CPEXPORT';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container)
    {
        $container[self::FACADE_CPEXPORT] = function (Container $container){
            return $container->getLocator()->cpExport()->facade();
        };

        return $container;
    }

}
