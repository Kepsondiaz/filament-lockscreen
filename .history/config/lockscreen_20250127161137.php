<?php

return [
    /**
     * Session Timeout (Time To Live)
     * The duration in seconds of inactivity after which the account will be locked.
     */
    'session_timeout_seconds' => env('LOCKSCREEN_TTL', 10 * 60), // Default: 10 Minutes

    /**
     * Automatically Append Middleware
     * If set to true, the 'lockscreen' middleware will be automatically added to the web middleware group.
     * If set to false, you need to add the middleware manually to your routes.
     */
    'auto_append_middleware' => false,

    /**
     * Lock Screen Route Name
     * The route name to which the user will be redirected when their session is locked.
     */
    'lockscreen_route_name' => 'locked',
];
