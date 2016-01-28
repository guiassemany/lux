<?php

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Hello\Model\Hello;

class HelloController
{
    public function indexAction(Request $request, $name)
    {
        $hello = new Hello();
        //return $hello->hi();
        return new Response('Nope, this is not a leap year.');
    }
}
