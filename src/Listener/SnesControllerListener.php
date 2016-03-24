<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 08:54
 */

namespace RicardoFiorani\TwitchPHPlays\Listener;


use RicardoFiorani\TwitchPHPlays\Controller\SnesController;

class SnesControllerListener
{
    /**
     * @var array
     */
    private $keyMap = [
        'up',
        'down',
        'left',
        'right',
        'a',
        'b',
        'x',
        'y',
        'select',
        'start',
        'r',
        'l',
    ];

    /**
     * @var SnesController
     */
    private $controller;

    /**
     * SnesControllerListener constructor.
     * @param SnesController $controller
     */
    public function __construct(SnesController $controller)
    {
        $this->controller = $controller;
    }

    public function __invoke($message, $write, $connection, $logger)
    {
        if ($message['command'] !== 'PRIVMSG') {
            return;
        }
        $keyPressed = strtolower($message['params']['text']);
        if (in_array($keyPressed, $this->keyMap)) {
            $this->controller->runKey($keyPressed);
        }
    }
}
