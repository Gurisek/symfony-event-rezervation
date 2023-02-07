<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage_default', '_controller' => 'App\\Controller\\HomepageController::default'], null, ['GET' => 0], null, false, false, null]],
        '/index' => [[['_route' => 'no_user_index', '_controller' => 'App\\Controller\\HomepageController::noUserindex'], null, ['GET' => 0], null, false, false, null]],
        '/dd' => [[['_route' => 'dd', '_controller' => 'App\\Controller\\HomepageController::dd'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/event/(?'
                    .'|([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|user/([^/]++)(*:68)'
                .')'
                .'|/show/([^/]++)(*:90)'
                .'|/user/([^/]++)(?'
                    .'|(*:114)'
                    .'|/edit(*:127)'
                    .'|(*:135)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        68 => [[['_route' => 'user_event_show', '_controller' => 'App\\Controller\\HomepageController::userShowEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'no_user_show', '_controller' => 'App\\Controller\\HomepageController::noUserShowEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        114 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
