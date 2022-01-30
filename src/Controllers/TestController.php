<?php

namespace Gustavo\Morais\Controllers;

class TestController
{
    public function index()
    {
        echo "list all";
    }

    public function show($id)
    {
        echo "show {$id}";
    }
}