<?php

use App\Classes\Authentication;
use App\Classes\Facebook;
use App\Models\GoogleModel;
use Carbon\Carbon;

return [
    'config' => [
        'cache' => _path('storage.cache'),
        'debug' => true, //used for development purposes 
// 'auto_reload' => true, // if it didn't set it will be determined from the value of debug option
    ],
    'globals' => [
        'errors' => _validate()->errors(), // or callable
        'auth' => function () {
            return new Authentication;
        }, 
    ],
    /**
     *  list the names of the classes that its functions will be statically called in Twig Environments 
     *  list the objects that its functions will be dynamically called in Twig Environments 
     *  the methods will be called its name pre-pended by the name of its class in lowercase
     *  (eg. Session::has($str) will be called session_has($str)) 
     */
    'static_functions' => [
        'Url', // 'Url' => 'url'
//        'Session',
//        'Token',
    ],
    'member_functions' => [
//        'App\Libs\Concretes\Validation' => ''
        'App\Libs\Concretes\Validation'
    ],
    'callable_functions' => [
        'social' => function ($c) {
            switch ($c) {
                case 'f':
                    $url = new Facebook;
                    return $url->getLoginUrl();
                case 'g':
                    $client = new Google_Client;
                    $auth = new GoogleModel($client);
                    return $auth->getAuthUrl();
            }
        },
        'time' => function ($time) {
            $t = new Carbon($time);
            return $t->toRfc850String();
        },
        'readable_time' => function ($time, $lang = 'en') {
            if ($lang === 'en') {
                $t = new Carbon($time);
                return $t->diffForHumans();
            }
            return _arabicDateFormat(strtotime($time));
        },
        'getErrors' => function () {
            $msgs = '';
            foreach (_validate()->getAllErrorMsgs() as $value) {
                $msgs .= $value . '\n';
            }
            return $msgs;
        },
    ],
    'filters' => [
        'e' => function ($str) {
            return _escape($str);
        },
    ],
];

