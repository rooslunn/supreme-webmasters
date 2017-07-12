<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 5:02
 */

namespace App\Templates;

use Mustache_Engine;

class MustacheRenderer implements Renderer
{
    private $engine;

    public function __construct(Mustache_Engine $engine)
    {
        $this->engine = $engine;
    }

    public function render($template, $data = []) : string
    {
        return $this->engine->render($template, $data);
    }
}