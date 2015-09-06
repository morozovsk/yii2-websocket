websocket extension for Simple websocket server on php https://github.com/morozovsk/websocket.

Configuration:

In order to enable this command you should adjust the configuration of your console application:

return [
    // ...

    'components' => [
        'websocket' => [
            'class' => 'morozovsk\websocket\Connection',
            'servers' => [
                'chat' => [
                    'class' => 'morozovsk\websocket\samples\ChatWebsocketDaemonHandler',
                    'pid' => '/tmp/websocket_chat.pid',
                    'websocket' => 'tcp://127.0.0.1:8000',
                    //'localsocket' => 'tcp://127.0.0.1:8010',
                    //'master' => 'tcp://127.0.0.1:8020',
                    //'eventDriver' => 'event'
                ],
                'chat2master' => [
                    'class' => 'morozovsk\websocket\samples\Chat2WebsocketMasterHandler',
                    'pid' => '/tmp/websocket_chat2_master.pid',
                    'websocket' => 'tcp://127.0.0.1:8011',
                    'localsocket' => 'tcp://127.0.0.1:8010',
                    //'master' => 'tcp://127.0.0.1:8020',
                    //'eventDriver' => 'event'
                ],
                'chat2worker' => [
                    'class' => 'morozovsk\websocket\samples\Chat2WebsocketWorkerHandler',
                    'pid' => '/tmp/websocket_chat2_worker.pid',
                    'websocket' => 'tcp://127.0.0.1:8001',
                    //'localsocket' => 'tcp://127.0.0.1:8010',
                    'master' => 'tcp://127.0.0.1:8010',//connect to master
                    //'eventDriver' => 'event'
                ],
                'chat3' => [
                    'class' => 'morozovsk\websocket\samples\Chat3WebsocketDaemonHandler',
                    'pid' => '/tmp/websocket_chat.pid',
                    'websocket' => 'tcp://127.0.0.1:8004',
                    'localsocket' => 'tcp://127.0.0.1:8010',
                    //'master' => 'tcp://127.0.0.1:8020',
                    //'eventDriver' => 'event'
                ]
            ],
        ],
    ],

    // ...
    'controllerMap' => [
        'websocket' => 'morozovsk\websocket\console\controllers\MigrateController'
    ],
];

Run from console:
* start: "./yii websocket/start chat3" or "nohup ./yii websocket/start chat3 &"
* stop: "./yii websocket/stop"
* restart: "./yii websocket/restart chat3" or "nohup ./yii websocket/restart chat3 &"


###License

(The MIT License)

Copyright (c) 2015 Vladimir Goncharov

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
