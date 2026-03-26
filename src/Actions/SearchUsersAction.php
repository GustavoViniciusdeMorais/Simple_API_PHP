<?php

namespace Gustavo\Morais\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class SearchUsersAction
{
    use AsAction;

    public function handle(): string
    {
        return "action test";
    }
}
