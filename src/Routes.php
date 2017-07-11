<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11.07.17
 * Time: 11:31
 */

return [
    ['GET', '/route1', function () {
        echo 'Route-1';
    }],
    ['GET', '/route2', function () {
        echo 'Route-2';
    }],
];