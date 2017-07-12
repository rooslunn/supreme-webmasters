<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 8:22
 */

namespace App\Page;


interface PageReader
{
    public function readBySlug(string $slug) : string;
}