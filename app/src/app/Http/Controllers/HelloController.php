<?php

namespace App\Http\Controllers;

class HelloController
{
    public function hello()
    {
        return response("Hello!!");
    }
}
