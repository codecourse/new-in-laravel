<?php

namespace App\Deployment;

use App\Models\Deployment;
use Closure;
use Exception;

class CreateServer
{
    public function __invoke(Deployment $deployment, Closure $next)
    {
        throw new Exception('Failed to create server');

        return $next($deployment);
    }
}
