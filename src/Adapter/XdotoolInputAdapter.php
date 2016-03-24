<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 24/03/2016
 * Time: 14:27
 */

namespace RicardoFiorani\TwitchPHPlays\Adapter;


class XdotoolInputAdapter implements AdapterInterface
{
    private $windowName;
    private $windowId;
    private $delay;

    /**
     * XdotoolInputAdapter constructor.
     * @param $windowName
     * @param $delay
     */
    public function __construct($windowName, $delay)
    {
        $this->windowName = $windowName;
        $this->delay = $delay;
    }

    private function getWindowId()
    {
        $this->windowId = trim(shell_exec("xdotool search --onlyvisible --name " . $this->windowName));
    }

    /**
     * @param $key
     */
    public function sendKey($key)
    {
        $this->getWindowId();
        shell_exec("xdotool key --window $this->windowId --delay $this->delay $key");
    }
}
