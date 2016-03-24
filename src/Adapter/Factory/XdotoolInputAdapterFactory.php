<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 14:51
 */

namespace RicardoFiorani\TwitchPHPlays\Adapter\Factory;


use Interop\Container\ContainerInterface;
use RicardoFiorani\TwitchPHPlays\Adapter\XdotoolInputAdapter;

class XdotoolInputAdapterFactory
{
    /**
     * @param ContainerInterface $container
     * @return XdotoolInputAdapter
     */
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        $targetEmulatorWindowName = $config['twitchbot']['target.emulator.window.name'];
        $keypressDelay = $config['twitchbot']['keypress.delay'];

        return new XdotoolInputAdapter($targetEmulatorWindowName, $keypressDelay);
    }
}
