<?php

namespace morozovsk\yii2websocket\console\controllers;

use Yii;
use yii\console\Controller;

class WebsocketController extends Controller
{
    public $component = 'websocket';

    public function actionStart($server)
    {
        $WebsocketServer = new \morozovsk\websocket\Server(Yii::$app->get($this->component)->servers[$server]);
        call_user_func(array($WebsocketServer, 'start'));
    }

    public function actionStop($server)
    {
        $WebsocketServer = new \morozovsk\websocket\Server(Yii::$app->get($this->component)->servers[$server]);
        call_user_func(array($WebsocketServer, 'stop'));
    }

    public function actionRestart($server)
    {
        $WebsocketServer = new \morozovsk\websocket\Server(Yii::$app->get($this->component)->servers[$server]);
        call_user_func(array($WebsocketServer, 'restart'));
    }
}
