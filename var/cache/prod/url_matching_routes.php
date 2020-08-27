<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/c(?'
                    .'|ampus/(?'
                        .'|supprimer/(\\d+)(*:36)'
                        .'|modifier/(\\d+)(*:57)'
                    .')'
                    .'|onnection/modifMdp/([^/]++)/([^/]++)(*:101)'
                .')'
                .'|/CSV/importation/(\\d+)(*:132)'
                .'|/p(?'
                    .'|hoto/modifier/(\\d+)(*:164)'
                    .'|rofil_(?'
                        .'|modifier/(\\d+)(*:195)'
                        .'|afficher/(\\d+)(*:217)'
                    .')'
                .')'
                .'|/bloquer/(\\d+)(*:241)'
                .'|/s(?'
                    .'|upprimer/(\\d+)(*:268)'
                    .'|ortie/(?'
                        .'|afficher/(\\d+)(*:299)'
                        .'|inscription_sortie/(\\d+)(*:331)'
                        .'|desinscription_sortie/(\\d+)(*:366)'
                        .'|sortie_(?'
                            .'|modifier/(\\d+)(*:398)'
                            .'|publier/(\\d+)(*:419)'
                            .'|annuler/(\\d+)(*:440)'
                        .')'
                    .')'
                .')'
                .'|/villes/(?'
                    .'|supprimer/(\\d+)(*:477)'
                    .'|modifier/(\\d+)(*:499)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'campus_supprimer', '_controller' => 'App\\Controller\\CampusController::supprimer'], ['id'], null, null, false, true, null]],
        57 => [[['_route' => 'campus_modifier', '_controller' => 'App\\Controller\\CampusController::modifier'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'modifMdp', '_controller' => 'App\\Controller\\MdpOublierController::modifMdp'], ['id', 'token'], null, null, false, true, null]],
        132 => [[['_route' => 'CSV_importation', '_controller' => 'App\\Controller\\CsvController::importation'], ['id'], null, null, false, true, null]],
        164 => [[['_route' => 'photo_modifier', '_controller' => 'App\\Controller\\PhotoController::modifier'], ['id'], null, null, false, true, null]],
        195 => [[['_route' => 'profil_modifier', '_controller' => 'App\\Controller\\ProfilController::modifier'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'profil_afficher', '_controller' => 'App\\Controller\\ProfilController::afficher'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'profil_bloquer', '_controller' => 'App\\Controller\\ProfilController::bloquer'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'profil_supprimer', '_controller' => 'App\\Controller\\ProfilController::supprimer'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'sortie_afficher', '_controller' => 'App\\Controller\\SortieController::afficher'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'sortie_inscription', '_controller' => 'App\\Controller\\SortieController::inscription'], ['id'], null, null, false, true, null]],
        366 => [[['_route' => 'sortie_desinscription', '_controller' => 'App\\Controller\\SortieController::desinscription'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'sortie_modifier', '_controller' => 'App\\Controller\\SortieController::modifier'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'sortie_publier', '_controller' => 'App\\Controller\\SortieController::publier'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'sortie_annuler', '_controller' => 'App\\Controller\\SortieController::annuler'], ['id'], null, null, false, true, null]],
        477 => [[['_route' => 'villes_supprimer', '_controller' => 'App\\Controller\\VillesController::supprimer'], ['id'], null, null, false, true, null]],
        499 => [
            [['_route' => 'villes_modifier', '_controller' => 'App\\Controller\\VillesController::modifier'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
