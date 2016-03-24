<?php
/**
 * Created by PhpStorm.
 * User Ricardo Fiorani
 * Date 24/03/2016
 * Time 0021
 */

namespace RicardoFiorani\TwitchPHPlays\Controller;


use RicardoFiorani\TwitchPHPlays\Adapter\AdapterInterface;

class SnesController
{
    private $keyMapTranslation = [
        'up' => 'Up',
        'down' => 'Down',
        'left' => 'Left',
        'right' => 'Right',
        'y' => 's',
        'x' => 'd',
        'b' => 'x',
        'a' => 'c',
        'select' => 'q',
        'start' => 'VK_Enter',
        'l' => 'w',
        'r' => 'e',
    ];
    /**
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * ControllerRunner constructor.
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function runKey($key)
    {
        $translatedKey = $this->translate($key);
        $this->adapter->sendKey($translatedKey);
    }

    private function translate($key)
    {
        return $this->keyMapTranslation[$key];
    }


}
