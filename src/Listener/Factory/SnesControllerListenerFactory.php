<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 11:05
 */

namespace RicardoFiorani\TwitchPHPlays\Listener\Factory;

use Interop\Container\ContainerInterface;
use RicardoFiorani\TwitchPHPlays\Controller\SnesController;
use RicardoFiorani\TwitchPHPlays\Listener\SnesControllerListener;

class SnesControllerListenerFactory
{
    /**
     * @param ContainerInterface $container
     * @return SnesControllerListener
     */
    public function __invoke(ContainerInterface $container)
    {
        /** @var SnesController $controller */
        $controller = $container->get(SnesController::class);

        return new SnesControllerListener($controller);
    }
}
