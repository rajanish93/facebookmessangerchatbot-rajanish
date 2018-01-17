<?php
require __DIR__.'vendor/autoload.php';
use Mpociot\BotMan\BotManFactory;
use Mpociot\BotMan\BotMan;

$botman = BotManFactory::create($config, new DoctrineCache($doctrineCacheDriver));

$config = [
    'hipchat_urls' => [
        'YOUR-INTEGRATION-URL-1',
        'YOUR-INTEGRATION-URL-2',
    ],
    /*'nexmo_key' => 'YOUR-NEXMO-APP-KEY',
    'nexmo_secret' => 'YOUR-NEXMO-APP-SECRET',
    'microsoft_bot_handle' => 'YOUR-MICROSOFT-BOT-HANDLE',
    'microsoft_app_id' => 'YOUR-MICROSOFT-APP-ID',
    'microsoft_app_key' => 'YOUR-MICROSOFT-APP-KEY',
    'slack_token' => 'YOUR-SLACK-TOKEN-HERE',
    'telegram_token' => 'YOUR-TELEGRAM-TOKEN-HERE',*/
    'facebook_token' => 'EAAay2RMWI3sBAIZCjSg9lVOJzSx0ZCrjAbxiWXtUPrEWUSZCRGoIiEWplegMswuux3gLQHuwrBZAqb8TMAZAvW2IZC8uHZCy0zFrwnR45aloLvVcdj2nW7DhaJiZCgPn9QHsvdaRiEPMWSCKaZBRnUrEFBlnQZCLyPEDygye8teQ4A9mKk18z7dAH5',
    'facebook_app_secret' => '32e5ed28eb6db874f8407e0c929ff3f7',
    /*'wechat_app_id' => 'YOUR-WECHAT-APP-ID',
    'wechat_app_key' => 'YOUR-WECHAT-APP-KEY',*/
];

// create an instance
$botman = BotManFactory::create($config);

$botman->verifyServices('12132dffgfg');
// give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// start listening
$botman->listen();

