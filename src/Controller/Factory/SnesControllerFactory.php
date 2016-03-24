<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 15:24
 */

namespace RicardoFiorani\TwitchPHPlays\Controller\Factory;


use Interop\Container\ContainerInterface;
use RicardoFiorani\TwitchPHPlays\Controller\SnesController;

class SnesControllerFactory
{
    /**
     * @param ContainerInterface $container
     * @return SnesController
     */
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        $adapter = $container->get($config['twitchbot']['controller.adapter']);

        return new SnesController($adapter);
    }
}
