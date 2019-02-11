<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [

        '/cpanel/customers/json/*',

        '/cpanel/rates/json/*',

        '/cpanel/jobs/json/*',

        '/cpanel/offers/json/*',
        
        '/cpanel/providers/json/*',

        '/cpanel/comments/json/*',

        '/cpanel/departments/json/*',
    ];
}
