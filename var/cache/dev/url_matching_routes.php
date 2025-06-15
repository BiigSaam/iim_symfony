<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/buy' => [[['_route' => 'app_buy', '_controller' => 'App\\Controller\\BuyController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/notification' => [[['_route' => 'app_notification_index', '_controller' => 'App\\Controller\\NotificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/notification/new' => [[['_route' => 'app_notification_new', '_controller' => 'App\\Controller\\NotificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/valider' => [[['_route' => 'app_panier_valider', '_controller' => 'App\\Controller\\PanierController::valider'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/add_points' => [[['_route' => 'admin_add_points', '_controller' => 'App\\Controller\\UserController::addPoints'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/notification/([^/]++)(?'
                    .'|(*:32)'
                    .'|/edit(*:44)'
                    .'|(*:51)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|ajouter/([^/]++)(*:89)'
                        .'|supprimer/([^/]++)(*:114)'
                    .')'
                    .'|rodu(?'
                        .'|ct/([^/]++)(*:141)'
                        .'|it/([^/]++)(?'
                            .'|(*:163)'
                            .'|/edit(*:176)'
                            .'|(*:184)'
                        .')'
                    .')'
                .')'
                .'|/admin/user/([^/]++)(?'
                    .'|(*:218)'
                    .'|/edit(*:231)'
                    .'|(*:239)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:279)'
                    .'|wdt/([^/]++)(*:299)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:345)'
                            .'|router(*:359)'
                            .'|exception(?'
                                .'|(*:379)'
                                .'|\\.css(*:392)'
                            .')'
                        .')'
                        .'|(*:402)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_notification_show', '_controller' => 'App\\Controller\\NotificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_notification_edit', '_controller' => 'App\\Controller\\NotificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_notification_delete', '_controller' => 'App\\Controller\\NotificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_panier_ajouter', '_controller' => 'App\\Controller\\PanierController::ajouter'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'app_panier_supprimer', '_controller' => 'App\\Controller\\PanierController::supprimer'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductDetailController::index'], ['id'], null, null, false, true, null]],
        163 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        239 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        299 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        345 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        359 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        379 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        392 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        402 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
