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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/administrateur' => [[['_route' => 'administrateur', '_controller' => 'App\\Controller\\AccueilController::administrateur'], null, null, null, false, false, null]],
        '/campus' => [[['_route' => 'campus', '_controller' => 'App\\Controller\\CampusController::afficherCampus'], null, null, null, true, false, null]],
        '/connection' => [[['_route' => 'connection', '_controller' => 'App\\Controller\\ConnectionController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\ConnectionController::logout'], null, null, null, false, false, null]],
        '/CSV' => [[['_route' => 'CSV_afficher', '_controller' => 'App\\Controller\\CsvController::afficherCSV'], null, null, null, true, false, null]],
        '/CSV/creation' => [[['_route' => 'CSV_creation', '_controller' => 'App\\Controller\\CsvController::creation'], null, null, null, false, false, null]],
        '/connection/oublier' => [[['_route' => 'mdp_oublier', '_controller' => 'App\\Controller\\MdpOublierController::traitementMail'], null, null, null, false, false, null]],
        '/photo' => [[['_route' => 'photo_afficher', '_controller' => 'App\\Controller\\PhotoController::afficherPhoto'], null, null, null, true, false, null]],
        '/photo/creation' => [[['_route' => 'photo_creation', '_controller' => 'App\\Controller\\PhotoController::creation'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\ProfilController::inscription'], null, null, null, false, false, null]],
        '/profils' => [[['_route' => 'profils', '_controller' => 'App\\Controller\\ProfilController::listeUtilisateur'], null, null, null, false, false, null]],
        '/sortie/creation_sortie' => [[['_route' => 'sortie_creation', '_controller' => 'App\\Controller\\SortieController::creation'], null, null, null, false, false, null]],
        '/villes' => [[['_route' => 'villes', '_controller' => 'App\\Controller\\VillesController::afficherVilles'], null, null, null, true, false, null]],
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
                .'|/c(?'
                    .'|ampus/(?'
                        .'|supprimer/(\\d+)(*:198)'
                        .'|modifier/(\\d+)(*:220)'
                    .')'
                    .'|onnection/modifMdp/([^/]++)/([^/]++)(*:265)'
                .')'
                .'|/CSV/importation/(\\d+)(*:296)'
                .'|/p(?'
                    .'|hoto/modifier/(\\d+)(*:328)'
                    .'|rofil_(?'
                        .'|modifier/(\\d+)(*:359)'
                        .'|afficher/(\\d+)(*:381)'
                    .')'
                .')'
                .'|/bloquer/(\\d+)(*:405)'
                .'|/s(?'
                    .'|upprimer/(\\d+)(*:432)'
                    .'|ortie/(?'
                        .'|afficher/(\\d+)(*:463)'
                        .'|inscription_sortie/(\\d+)(*:495)'
                        .'|desinscription_sortie/(\\d+)(*:530)'
                        .'|sortie_(?'
                            .'|modifier/(\\d+)(*:562)'
                            .'|publier/(\\d+)(*:583)'
                            .'|annuler/(\\d+)(*:604)'
                        .')'
                    .')'
                .')'
                .'|/villes/(?'
                    .'|supprimer/(\\d+)(*:641)'
                    .'|modifier/(\\d+)(*:663)'
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
        198 => [[['_route' => 'campus_supprimer', '_controller' => 'App\\Controller\\CampusController::supprimer'], ['id'], null, null, false, true, null]],
        220 => [[['_route' => 'campus_modifier', '_controller' => 'App\\Controller\\CampusController::modifier'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'modifMdp', '_controller' => 'App\\Controller\\MdpOublierController::modifMdp'], ['id', 'token'], null, null, false, true, null]],
        296 => [[['_route' => 'CSV_importation', '_controller' => 'App\\Controller\\CsvController::importation'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'photo_modifier', '_controller' => 'App\\Controller\\PhotoController::modifier'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'profil_modifier', '_controller' => 'App\\Controller\\ProfilController::modifier'], ['id'], null, null, false, true, null]],
        381 => [[['_route' => 'profil_afficher', '_controller' => 'App\\Controller\\ProfilController::afficher'], ['id'], null, null, false, true, null]],
        405 => [[['_route' => 'profil_bloquer', '_controller' => 'App\\Controller\\ProfilController::bloquer'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'profil_supprimer', '_controller' => 'App\\Controller\\ProfilController::supprimer'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => 'sortie_afficher', '_controller' => 'App\\Controller\\SortieController::afficher'], ['id'], null, null, false, true, null]],
        495 => [[['_route' => 'sortie_inscription', '_controller' => 'App\\Controller\\SortieController::inscription'], ['id'], null, null, false, true, null]],
        530 => [[['_route' => 'sortie_desinscription', '_controller' => 'App\\Controller\\SortieController::desinscription'], ['id'], null, null, false, true, null]],
        562 => [[['_route' => 'sortie_modifier', '_controller' => 'App\\Controller\\SortieController::modifier'], ['id'], null, null, false, true, null]],
        583 => [[['_route' => 'sortie_publier', '_controller' => 'App\\Controller\\SortieController::publier'], ['id'], null, null, false, true, null]],
        604 => [[['_route' => 'sortie_annuler', '_controller' => 'App\\Controller\\SortieController::annuler'], ['id'], null, null, false, true, null]],
        641 => [[['_route' => 'villes_supprimer', '_controller' => 'App\\Controller\\VillesController::supprimer'], ['id'], null, null, false, true, null]],
        663 => [
            [['_route' => 'villes_modifier', '_controller' => 'App\\Controller\\VillesController::modifier'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
