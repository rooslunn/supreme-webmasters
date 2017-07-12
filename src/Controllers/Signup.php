<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11.07.17
 * Time: 11:40
 */

namespace App\Controllers;

use Http\{Response, Request};
use App\Templates\Renderer;


class Signup
{
    protected $response;
    protected $request;
    protected $renderer;

    public function __construct(Request $request, Response $response, Renderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }
    
    public function index()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'Russ'),
        ];
        $html = $this->renderer->render('signup', $data);
        $this->response->setContent($html);
    }
}