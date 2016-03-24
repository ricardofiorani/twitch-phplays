<?php

use Phergie\Irc\Bot\React\Bot;
use RicardoFiorani\TwitchPHPlays\Adapter\Factory\XdotoolInputAdapterFactory;
use RicardoFiorani\TwitchPHPlays\Adapter\XdotoolInputAdapter;
use RicardoFiorani\TwitchPHPlays\Bot\Factory\BotFactory;
use RicardoFiorani\TwitchPHPlays\Controller\Factory\SnesControllerFactory;
use RicardoFiorani\TwitchPHPlays\Controller\SnesController;
use RicardoFiorani\TwitchPHPlays\Listener\Factory\SnesControllerListenerFactory;
use RicardoFiorani\TwitchPHPlays\Listener\SnesControllerListener;
use RicardoFiorani\TwitchPHPlays\Runner\BotRunner;
use RicardoFiorani\TwitchPHPlays\Runner\Factory\BotRunnerFactory;

return [
    'dependencies' => [
        'invokables' => [
        ],
        'factories' => [
            SnesController::class => SnesControllerFactory::class,
            SnesControllerListener::class => SnesControllerListenerFactory::class,
            BotRunner::class => BotRunnerFactory::class,
            Bot::class => BotFactory::class,
            XdotoolInputAdapter::class => XdotoolInputAdapterFactory::class,
        ],
    ],
    'twitchbot' => [
        'target.emulator.window.name' => 'ZSNES',
        'keypress.delay' => '100',
        'controller.adapter' => XdotoolInputAdapter::class,
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
