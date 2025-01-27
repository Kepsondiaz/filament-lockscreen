<?php

// config for Kepsondiaz/Lockscreen
return [
    /**
     * Time to live
     * Seconds to wait after last activity before locking the account.
     */
    'ttl' => env('',10 * 60), // 10 Minutes

    /**
     * Append middleware to the web middleware group.
     * If false, you should add the middleware 'lockscreen' manually to the routes.
     */
    'append_middleware' => false,

    /**
     * Route name
     * The name of the route to redirect to when the account is locked.
     */
    'route' => 'locked',
];
