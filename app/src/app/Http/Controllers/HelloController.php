<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class HelloController
{
    public function hello()
    {
        Log::debug("Hello!!");
        return response("Hello!!!");
    }
}
