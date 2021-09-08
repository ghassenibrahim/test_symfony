<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function hello(): Response
    {
        echo ("hi");
        return new Response();
    }
}
