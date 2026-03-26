<?php

namespace Gustavo\Morais\Controllers;

use Gustavo\Morais\Actions\SearchUsersAction;

class TestController
{
    public static function index()
    {
        echo SearchUsersAction::run();
    }

    public static function show($id)
    {
        echo "show {$id}";
    }
}
