<?php

namespace App\Deployment;

use App\Models\Deployment;
use Closure;

class InstallPHP
{
    public function __invoke(Deployment $deployment, Closure $next)
    {
        return $next($deployment);
    }
}
