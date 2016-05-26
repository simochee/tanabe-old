<?php

require_once('FileLogger.php');
require_once('Application.php');

$logger = new FileLogger('/tmp/log.txt');

$app = new application();
$app->setLogger($logger);

$app->log('アプリケーション機動');
$app->log('処理を受け付けました');
$app->log('アプリケーション終了');
