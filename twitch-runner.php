#!/usr/bin/env php
<?php

if (!isset($argv)) {
    trigger_error('Please enable register_argc_argv in your PHP configuration', E_USER_ERROR);
}

require __DIR__ . '/vendor/autoload.php';


/** @var \Interop\Container\ContainerInterface $container */
$container = require __DIR__ . '/config/container.php';

$runner = $container->get(\RicardoFiorani\TwitchPHPlays\Runner\BotRunner::class);
$runner->run();
