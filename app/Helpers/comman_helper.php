<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('log_error')) {

    function log_error($msg)
    {
        if (env('local') == "local") {
            dd($msg);
            return;
        }
        Log::error($msg);
    }
}