<?php

use Phergie\Irc\Bot\React\Bot;
use RicardoFiorani\TwitchPHPlays\Bot\Factory\BotFactory;
use RicardoFiorani\TwitchPHPlays\Controller\SnesController;
use RicardoFiorani\TwitchPHPlays\Listener\Factory\SnesControllerListenerFactory;
use RicardoFiorani\TwitchPHPlays\Listener\SnesControllerListener;
use RicardoFiorani\TwitchPHPlays\Runner\BotRunner;
use RicardoFiorani\TwitchPHPlays\Runner\Factory\BotRunnerFactory;

return [
    'dependencies' => [
        'invokables' => [
            SnesController::class => SnesController::class,
        ],
        'factories' => [
            SnesControllerListener::class => SnesControllerListenerFactory::class,
            BotRunner::class => BotRunnerFactory::class,
            Bot::class => BotFactory::class,
        ],
    ],
    'twitchbot' => [
        'listeners' => [
            [
                'name' => 'snes.controller.listener',
                'event' => 'irc.received',
                'class' => SnesControllerListener::class,
            ],
        ],
        /*
        'connections' => [
            //... set in local config for security reasons
        ],
        'plugins' => [
            //... set in local config for security reasons
        ],
        */
    ],
];
