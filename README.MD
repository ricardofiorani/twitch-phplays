# Twitch PHPlays

An OpenSource PHP library for making "Twitch Plays".

## What ?
Basically it runs a bot that reads a channel in Twitch IRC and converts it into an game emulator input.

## Why create another one if there is a lot of Twitch Plays libs in Github ?
Because most of them is in Python, so this one is to show that PHP can do it too !

## Can I use it ?
It's not ready yet. (sorry)

## Can I test it and find some issue or even make a PR ?
Sure !

## What controllers does it supports ?
Currently only Snes controller.

## Usage
First you must rename the file in config/autoload/local.php.dist to local.php and edit this file.
Tip: To generate the oauth token you can use this website -> https://twitchapps.com/tmi/
Then :
``` bash
$ composer run
```
