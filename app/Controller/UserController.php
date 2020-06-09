<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\View\RenderInterface;

class UserController
{
    public function index(RequestInterface $request,ResponseInterface $response,RenderInterface $render)
    {
        // return $response->raw('index!');
        // 存在则返回，不存在则返回 null
        $name = $request->all();
        return $response->json($name);
        return $render->render('index', ['name' => $name]);
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
