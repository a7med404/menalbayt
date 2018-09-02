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


        '/cpanel/customers/json/getDataJson',
        '/cpanel/customers/json/setDataJson',
        '/cpanel/customers/json/getDataLoginJson',

        '/cpanel/rates/json/setDataJson',
        '/cpanel/rates/json/getDataJson',

        '/cpanel/jobs/json/getDataAllJobsJson',

        '/cpanel/offers/json/getDataOneJson',
        '/cpanel/offers/json/setDataNewOfferJson',
        '/cpanel/offers/json/getDataOfferNotApprovedForCustomerJson',
        '/cpanel/offers/json/getDataOfferApprovedForCustomerJson',
        '/cpanel/offers/json/getDataOfferProviderApprovedForCustomerJson',
        '/cpanel/offers/json/getDataOfferForProviderJson',
        '/cpanel/offers/json/setDataNewOfferJson', 
        '/cpanel/offers/json/setProviderIdDataJson',
        '/cpanel/offers/json/setOfferLevelDataJson',
        
        '/cpanel/providers/json/getDataOneJson',
        '/cpanel/providers/json/getDataLoginJson',
        '/cpanel/providers/json/getDataAllProvidersJson', 
    ];
}
