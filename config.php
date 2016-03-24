<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 23/03/2016
 * Time: 22:55
 */

return [
    'connections' => [
        new \Phergie\Irc\Connection([
                'serverHostname' => 'irc.twitch.tv',
                'username' => 'ricardofiorani',
                'realname' => 'Ricardo Fiorani',
                'nickname' => 'ricardofiorani',
                'password' => require __DIR__ . '/oauth-key.php',
            ]
        ),
    ],
    'plugins' => array(

        new \Phergie\Irc\Plugin\React\AutoJoin\Plugin([

            // Required: list of channels to join
            'channels' => [
                '#ricardofiorani'
            ],

            // Optional: if true, doesn't join channels until
            // the NickServ plugin has successfully logged in
            //'wait-for-nickserv' => true,

        ]),

        // If wait-for-nickserv is enabled, the NickServ plugin must also be used
//        new Phergie\Irc\Plugin\React\NickServ\Plugin([
        /* .... */
//        ]),

    ),
];
