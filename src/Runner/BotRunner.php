<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 09:42
 */

namespace RicardoFiorani\TwitchPHPlays\Runner;


use Phergie\Irc\Bot\React\Bot;

class BotRunner
{
    /**
     * @var Bot
     */
    private $bot;
    /**
     * @var array
     */
    private $listeners;

    /**
     * BotRunner constructor.
     * @param Bot $bot
     * @param array $listeners
     */
    public function __construct(Bot $bot, array $listeners)
    {
        $this->bot = $bot;
        $this->listeners = $listeners;
    }

    public function run()
    {
        $this->attachListeners();
        $this->bot->run();
    }

    private function attachListeners()
    {
        foreach ($this->listeners as $listener) {
            $this->bot->getClient()->on($listener['event'], $listener['callable']);
        }
    }
}
