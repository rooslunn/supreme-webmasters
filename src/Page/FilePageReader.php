<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 8:26
 */

namespace App\Page;


class FilePageReader implements PageReader
{
    protected $pageFolder;

    public function __construct(string $pageFolder)
    {
        $this->pageFolder = $pageFolder;
    }

    public function readBySlug(string $slug) : string
    {
        $path = "$this->pageFolder/$slug.md";

        if (!file_exists($path)) {
            throw new InvalidPageException($slug);
        }

        return file_get_contents($path);
    }
}