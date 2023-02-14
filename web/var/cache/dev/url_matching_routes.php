<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage_default', '_controller' => 'App\\Controller\\HomepageController::default'], null, ['GET' => 0], null, false, false, null]],
        '/index' => [[['_route' => 'no_user_index', '_controller' => 'App\\Controller\\HomepageController::noUserindex'], null, ['GET' => 0], null, false, false, null]],
        '/contacts' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomepageController::FunctionName'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/event/(?'
                    .'|([^/]++)(?'
                        .'|(*:190)'
                        .'|/edit(*:203)'
                        .'|(*:211)'
                    .')'
                    .'|event(?'
                        .'|/user/([^/]++)/join(*:247)'
                        .'|s(?'
                            .'|(*:259)'
                            .'|/([^/]++)(*:276)'
                        .')'
                    .')'
                    .'|user/([^/]++)(*:299)'
                .')'
                .'|/show/([^/]++)(*:322)'
                .'|/user/([^/]++)(?'
                    .'|(*:347)'
                    .'|/(?'
                        .'|edit(*:363)'
                        .'|user_(?'
                            .'|promote(*:386)'
                            .'|demote(*:400)'
                        .')'
                    .')'
                    .'|(*:410)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'event_join', '_controller' => 'App\\Controller\\EventController::join'], ['id'], null, null, false, false, null]],
        259 => [[['_route' => 'joined_index', '_controller' => 'App\\Controller\\EventUserController::index'], [], ['GET' => 0], null, true, false, null]],
        276 => [[['_route' => 'joined_show', '_controller' => 'App\\Controller\\EventUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'user_event_show', '_controller' => 'App\\Controller\\HomepageController::userShowEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'no_user_show', '_controller' => 'App\\Controller\\HomepageController::noUserShowEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [[['_route' => 'app_user_promote', '_controller' => 'App\\Controller\\UserController::promoteUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_user_demote', '_controller' => 'App\\Controller\\UserController::demoteUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
