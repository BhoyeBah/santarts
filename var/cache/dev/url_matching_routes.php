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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\Admin\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/blog/catégorie' => [[['_route' => 'app_blog_category_index', '_controller' => 'App\\Controller\\Admin\\BlogCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/blog/catégorie/new' => [[['_route' => 'app_blog_category_new', '_controller' => 'App\\Controller\\Admin\\BlogCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/catégorie' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/catégorie/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/produit' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/produit/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/remove' => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\HomeController::product'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\HomeController::evenement'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\HomeController::blog'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/gallery' => [[['_route' => 'app_gallery', '_controller' => 'App\\Controller\\HomeController::gallery'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_order_create', '_controller' => 'App\\Controller\\OrderController::order'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|article/([^/]++)(?'
                        .'|(*:231)'
                        .'|/edit(*:244)'
                        .'|(*:252)'
                    .')'
                    .'|blog/catégorie/([^/]++)(?'
                        .'|(*:288)'
                        .'|/edit(*:301)'
                        .'|(*:309)'
                    .')'
                    .'|catégorie/([^/]++)(?'
                        .'|(*:340)'
                        .'|/edit(*:353)'
                        .'|(*:361)'
                    .')'
                    .'|produit/([^/]++)(?'
                        .'|(*:389)'
                        .'|/edit(*:402)'
                        .'|(*:410)'
                    .')'
                .')'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:443)'
                    .'|decrease/([^/]++)(*:468)'
                .')'
                .'|/Blog/article/([^/]++)(*:499)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        231 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'app_blog_category_show', '_controller' => 'App\\Controller\\Admin\\BlogCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_blog_category_edit', '_controller' => 'App\\Controller\\Admin\\BlogCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'app_blog_category_delete', '_controller' => 'App\\Controller\\Admin\\BlogCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'app_cart_decrease', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        499 => [
            [['_route' => 'app_single_article', '_controller' => 'App\\Controller\\SingleArticleController::index'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
