<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 12.07.17
 * Time: 8:41
 */

namespace App\Page;


class InvalidPageException extends \Exception
{
    public function __construct($slug, $code = 0, Exception $previous = null)
    {
        $message = "No page with the slug `$slug` was found";
        parent::__construct($message, $code, $previous);
    }
}