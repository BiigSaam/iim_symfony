<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_buy' => [[], ['_controller' => 'App\\Controller\\BuyController::index'], [], [['text', '/buy']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_notification_index' => [[], ['_controller' => 'App\\Controller\\NotificationController::index'], [], [['text', '/notification/']], [], [], []],
    'app_notification_new' => [[], ['_controller' => 'App\\Controller\\NotificationController::new'], [], [['text', '/notification/new']], [], [], []],
    'app_notification_show' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_notification_edit' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_notification_delete' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier']], [], [], []],
    'app_panier_ajouter' => [['id'], ['_controller' => 'App\\Controller\\PanierController::ajouter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/ajouter']], [], [], []],
    'app_panier_supprimer' => [['id'], ['_controller' => 'App\\Controller\\PanierController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/supprimer']], [], [], []],
    'app_panier_valider' => [[], ['_controller' => 'App\\Controller\\PanierController::valider'], [], [['text', '/panier/valider']], [], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductDetailController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'app_produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user/']], [], [], []],
    'admin_add_points' => [[], ['_controller' => 'App\\Controller\\UserController::addPoints'], [], [['text', '/admin/user/add_points']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    'api_produits_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_produits_get_collection', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/produits']], [], [], []],
    'api_produits_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Produit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_produits_get_item', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/produits']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
