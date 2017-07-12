<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 4:25
 */

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('App\Templates\Renderer', 'App\Templates\MustacheRenderer');

$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/resources/views', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->define('App\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../resources/pages',
]);

$injector->alias('App\Page\PageReader', 'App\Page\FilePageReader');
$injector->share('App\Page\FilePageReader');

return $injector;