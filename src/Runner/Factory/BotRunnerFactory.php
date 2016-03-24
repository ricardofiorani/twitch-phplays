<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 10:03
 */

namespace RicardoFiorani\TwitchPHPlays\Runner\Factory;


use Interop\Container\ContainerInterface;
use Phergie\Irc\Bot\React\Bot;
use RicardoFiorani\TwitchPHPlays\Runner\BotRunner;

class BotRunnerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $bot = $container->get(Bot::class);
        $listeners = $container->get('config')['twitchbot']['listeners'];
        foreach ($listeners as &$listener) {
            $listener['callable'] = $container->get($listener['class']);
        }

        return new BotRunner($bot, $listeners);
    }
}
