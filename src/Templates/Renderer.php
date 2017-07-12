<?php declare(strict_types = 1);

namespace App\Templates;

/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 5:01
 */
interface Renderer
{
    public function render($template, $data = []) : string;
}