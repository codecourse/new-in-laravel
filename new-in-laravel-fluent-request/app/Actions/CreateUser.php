<?php

namespace App\Actions;

use Illuminate\Support\Fluent;

class CreateUser
{
    public function handle(Fluent $data)
    {
        dd($data->name);
    }
}
