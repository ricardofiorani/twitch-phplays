<?php
/**
 * Created by PhpStorm.
 * User Ricardo Fiorani
 * Date 24/03/2016
 * Time 0021
 */

namespace RicardoFiorani\TwitchPHPlays\Controller;


class SnesController
{
    private $shell;

    private $keyMapTranslation = [
        'up' => '{UP}',
        'down' => '{DOWN}',
        'left' => '{LEFT}',
        'right' => '{RIGHT}',
        'y' => 's',
        'x' => 'd',
        'b' => 'x',
        'a' => 'c',
        'select' => 'q',
        'start' => '{ENTER}',
        'l' => 'w',
        'r' => 'e',
    ];

    /**
     * ControllerRunner constructor.
     */
    public function __construct()
    {
        $this->shell = new \COM("WScript.Shell");
        $this->shell->appactivate("VisualBoyAdvance");
    }

    public function runKey($key)
    {
        $translatedKey = $this->translate($key);
        $this->shell->SendKeys($translatedKey);
    }

    private function translate($key)
    {
        return $this->keyMapTranslation[$key];
    }


}
