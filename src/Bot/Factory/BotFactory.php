<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 09:55
 */

namespace RicardoFiorani\TwitchPHPlays\Bot\Factory;


use Interop\Container\ContainerInterface;

class BotFactory
{
    /**
     * @param ContainerInterface $container
     * @return \Phergie\Irc\Bot\React\Bot
     */
    public function __invoke(ContainerInterface $container)
    {
        $bot = new \Phergie\Irc\Bot\React\Bot;
        $botConfig = $container->get('config')['twitchbot'];
        $bot->setConfig($botConfig);

        return $bot;
    }
}
