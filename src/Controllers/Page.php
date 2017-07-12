<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 8:17
 */

namespace App\Controllers;

use Http\Response;
use App\{
    Templates\Renderer,
    Page\PageReader
};
use App\Page\InvalidPageException;

class Page
{
    private $response;
    private $renderer;
    private $pageReader;

    public function __construct(Response $response, Renderer $renderer, PageReader $pageReader)
    {
        $this->response = $response;
        $this->renderer = $renderer;
        $this->pageReader = $pageReader;
    }

    public function index($params)
    {
        $slug = $params['slug'];

        try {
            $data['content'] = $this->pageReader->readBySlug($slug);
        } catch (InvalidPageException $e) {
            $this->response->setStatusCode(404);
            return $this->response->setContent('404 - Page not found');
        }

        $html = $this->renderer->render('page', $data);
        $this->response->setContent($html);
    }
}