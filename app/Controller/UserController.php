<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

class UserController
{
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('index!');
    }

    public function store(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('store!');
    }

    public function update(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('update!');
    }

    public function delete(RequestInterface $request, ResponseInterface $response)
    {
        return $response->raw('delete!');
    }
}
