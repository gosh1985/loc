<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language'=>'ru-Ru',
    'defaultRoute'=> 'category/index',
    'modules' => [
       'admin' => [
           'class' => 'app\modules\admin\Module',
           'layout'=>'admin',
           'defaultRoute'=>'order/index',

       ],
   ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'uyC779hUQ3iLAOVLUUMxgaq_0gdPmA44',
            'baseUrl'=>'/yii2.loc',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            //'loginUrl'=> 'cart',    //example where can be loginform
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' =>false,
            'transport' => [
             'class' => 'Swift_SmtpTransport',
             'host' => 'smtp.mail.ru',
             'username' => 'ig1985@mail.ua',
             'password' => '260385go',
             'port' => '465',
             'encryption' => 'ssl',
       ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
              'category/<id:\d+>/page/<page:\d+>'=> 'category/view',
              'category/<id:\d+>'=> 'category/view',
              'product/<id:\d+>'=> 'product/view',
              'search' => 'category/search',
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
