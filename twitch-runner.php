#!/usr/bin/env php
<?php

if (!isset($argv)) {
    trigger_error('Please enable register_argc_argv in your PHP configuration', E_USER_ERROR);
}

require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config.php';

$bot = new \Phergie\Irc\Bot\React\Bot;
$controllerRunner = new \RicardoFiorani\TwitchPHPlays\ControllerRunner\ControllerRunner();
$bot->setConfig($config);
$bot->getClient()->on('irc.received',
    function ($message, \Phergie\Irc\Client\React\WriteStream $write, $connection, $logger) use ($controllerRunner) {

        if ($message['command'] !== 'PRIVMSG') {
            return;
        }
        $cmd = strtolower($message['params']['text']);
        switch ($cmd) {
            case 'up':
            case 'down':
            case 'left':
            case 'right':
            case 'a':
            case 'b':
            case 'x':
            case 'y':
            case 'select':
            case 'start':
            case 'r':
            case 'l':
                $controllerRunner->runKey($cmd);
                break;
            default:
                break;

        }
    });
$bot->run();
