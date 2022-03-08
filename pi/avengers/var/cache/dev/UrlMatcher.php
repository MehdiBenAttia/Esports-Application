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
        '/AfficheCateg' => [[['_route' => 'AfficheCateg', '_controller' => 'App\\Controller\\CategorieCController::Affiche'], null, null, null, false, false, null]],
        '/AjoutCateg' => [[['_route' => 'Acateg', '_controller' => 'App\\Controller\\CategorieCController::Ajout'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/CategorieM' => [[['_route' => 'allcat', '_controller' => 'App\\Controller\\CategorieController::catid'], null, null, null, false, false, null]],
        '/addcatJSON/new' => [[['_route' => 'addcat', '_controller' => 'App\\Controller\\CategorieController::addpcat'], null, null, null, false, false, null]],
        '/Affichercat' => [[['_route' => 'affichcat', '_controller' => 'App\\Controller\\CategorieController::Affiche'], null, null, null, false, false, null]],
        '/side' => [[['_route' => 'side', '_controller' => 'App\\Controller\\CategorieController::Affichefronhome'], null, null, null, false, false, null]],
        '/Ajoutcat' => [[['_route' => 'Acat', '_controller' => 'App\\Controller\\CategorieController::Ajout'], null, null, null, false, false, null]],
        '/tournament' => [[['_route' => 'tournament', '_controller' => 'App\\Controller\\CompetitionController::Tournament'], null, null, null, false, false, null]],
        '/AfficheC' => [[['_route' => 'AfficheC', '_controller' => 'App\\Controller\\CompetitionController::Affiche'], null, null, null, false, false, null]],
        '/croissant' => [[['_route' => 'croissant', '_controller' => 'App\\Controller\\CompetitionController::croissant'], null, null, null, false, false, null]],
        '/decroissant' => [[['_route' => 'decroissant', '_controller' => 'App\\Controller\\CompetitionController::decroissant'], null, null, null, false, false, null]],
        '/croissantF' => [[['_route' => 'croissantF', '_controller' => 'App\\Controller\\CompetitionController::croissantF'], null, null, null, false, false, null]],
        '/decroissantF' => [[['_route' => 'decroissantF', '_controller' => 'App\\Controller\\CompetitionController::decroissantF'], null, null, null, false, false, null]],
        '/croissantN' => [[['_route' => 'croissantN', '_controller' => 'App\\Controller\\CompetitionController::croissantN'], null, null, null, false, false, null]],
        '/decroissantN' => [[['_route' => 'decroissantN', '_controller' => 'App\\Controller\\CompetitionController::decroissantN'], null, null, null, false, false, null]],
        '/AjoutC' => [[['_route' => 'Ac', '_controller' => 'App\\Controller\\CompetitionController::Ajout'], null, null, null, false, false, null]],
        '/searchcompetitionajax' => [
            [['_route' => 'ajaxcompetition', '_controller' => 'App\\Controller\\CompetitionController::searchajax'], null, null, null, false, false, null],
            [['_route' => 'ajaxproduit', '_controller' => 'App\\Controller\\ProduitController::searchajax'], null, null, null, false, false, null],
        ],
        '/games' => [[['_route' => 'games', '_controller' => 'App\\Controller\\CompetitionController::games'], null, null, null, false, false, null]],
        '/CompetitionM' => [[['_route' => 'allcompetitions', '_controller' => 'App\\Controller\\CompetitionController::displayCompetitions'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'global', '_controller' => 'App\\Controller\\GlobalController::index'], null, null, null, false, false, null]],
        '/jeux' => [[['_route' => 'jeux', '_controller' => 'App\\Controller\\JeuxController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\JeuxController::home'], null, null, null, false, false, null]],
        '/AfficheJ' => [[['_route' => 'AfficheJ', '_controller' => 'App\\Controller\\JeuxController::Affiche'], null, null, null, false, false, null]],
        '/AjoutJ' => [[['_route' => 'AJ', '_controller' => 'App\\Controller\\JeuxController::Ajout'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\ProduitController::indexe'], null, null, null, false, false, null]],
        '/Afficher' => [[['_route' => 'affich', '_controller' => 'App\\Controller\\ProduitController::Affiche'], null, null, null, false, false, null]],
        '/DESC' => [[['_route' => 'DESC', '_controller' => 'App\\Controller\\ProduitController::desc'], null, null, null, false, false, null]],
        '/ASC' => [[['_route' => 'ASC', '_controller' => 'App\\Controller\\ProduitController::asc'], null, null, null, false, false, null]],
        '/Afficherfront' => [[['_route' => 'affichfront', '_controller' => 'App\\Controller\\ProduitController::Affichefront'], null, null, null, false, false, null]],
        '/Ajout' => [[['_route' => 'A', '_controller' => 'App\\Controller\\ProduitController::Ajout'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'app_review', '_controller' => 'App\\Controller\\ReviewController::index'], null, null, null, false, false, null]],
        '/ajoutrev' => [[['_route' => 'Arev', '_controller' => 'App\\Controller\\ReviewController::Ajouterreview'], null, null, null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
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
                .'|/Delete(?'
                    .'|C(?'
                        .'|ateg/([^/]++)(*:196)'
                        .'|/([^/]++)(*:213)'
                    .')'
                    .'|cat/([^/]++)(*:234)'
                    .'|J/([^/]++)(*:252)'
                    .'|/([^/]++)(*:269)'
                .')'
                .'|/Update(?'
                    .'|C(?'
                        .'|ateg/([^/]++)(*:305)'
                        .'|/([^/]++)(*:322)'
                    .')'
                    .'|J/([^/]++)(*:341)'
                .')'
                .'|/update(?'
                    .'|CategorieJSON/([^/]++)(*:382)'
                    .'|catJSON/([^/]++)(*:406)'
                .')'
                .'|/c(?'
                    .'|ategorie/Update/([^/]++)(*:444)'
                    .'|ompetition_detail/([^/]++)(*:478)'
                    .'|hoix_categorie/([^/]++)(*:509)'
                .')'
                .'|/Afficherfrontdetail/([^/]++)(*:547)'
                .'|/Imprimer/([^/]++)(*:573)'
                .'|/produit/Update/([^/]++)(*:605)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:641)'
                .'|/js/routing(?:\\.(js|json))?(*:676)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'dcateg', '_controller' => 'App\\Controller\\CategorieCController::Delete'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'dc', '_controller' => 'App\\Controller\\CompetitionController::Delete'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'dcat', '_controller' => 'App\\Controller\\CategorieController::Delete'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'dJ', '_controller' => 'App\\Controller\\JeuxController::Delete'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'd', '_controller' => 'App\\Controller\\ProduitController::Delete'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'Ucateg', '_controller' => 'App\\Controller\\CategorieCController::Update'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'Uc', '_controller' => 'App\\Controller\\CompetitionController::Update'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'UJ', '_controller' => 'App\\Controller\\JeuxController::Update'], ['id'], null, null, false, true, null]],
        382 => [[['_route' => 'updateCategorieJSON', '_controller' => 'App\\Controller\\CategorieCController::updateCategorieJSON'], ['id'], null, null, false, true, null]],
        406 => [[['_route' => 'updatecatJSON', '_controller' => 'App\\Controller\\CategorieController::updateCommentaireJSON'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'Upc', '_controller' => 'App\\Controller\\CategorieController::Update'], ['id'], null, null, false, true, null]],
        478 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\CompetitionController::detail'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'choix_categorie', '_controller' => 'App\\Controller\\JeuxController::choix_categorie'], ['id'], null, null, false, true, null]],
        547 => [[['_route' => 'affichfrontdetail', '_controller' => 'App\\Controller\\ProduitController::Affichefrontdetail'], ['id'], null, null, false, true, null]],
        573 => [[['_route' => 'imp', '_controller' => 'App\\Controller\\ProduitController::pdf'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'U', '_controller' => 'App\\Controller\\ProduitController::Update'], ['id'], null, null, false, true, null]],
        641 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        676 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
