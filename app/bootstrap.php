<?php

require __DIR__.'/../vendor/autoload.php';

/*
| ------------------------------
| Dispatch configs
| ------------------------------
*/

// REQUIRED, base path for your views
config('dispatch.views', __DIR__.'/views');

// OPTIONAL, layout file to use (defaults to 'layout')
config('dispatch.layout', 'layout');

// OPTIONAL, cookie for flash messages (defaults to '_F')
config('dispatch.flash_cookie', '_F');

// OPTIONAL, specify your app's full URL
// config('dispatch.url', 'http://somedomain.com/someapp/path');

// OPTIONAL, routing file to be taken off of the request URI
config('dispatch.router', 'index.php');

require __DIR__.'/router.php';