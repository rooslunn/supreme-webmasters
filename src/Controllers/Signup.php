<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 11.07.17
 * Time: 11:40
 */

namespace App\Controllers;

use Http\{Response, Request};


class Signup
{
    protected $response;
    protected $request;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    
    public function index()
    {
        $content = '<h4>Sign UP</h4>';
        $content .= 'Hello ' . $this->request->getParameter('name', 'rkladko');
        $this->response->setContent($content);
    }
}