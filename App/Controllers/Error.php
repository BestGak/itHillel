<?php

namespace App\Controllers;

class Error
{
    public function index() 
    {
        echo "404 Page Not Found.";
    }

    public function notFound() 
    {
        echo "Method not found.";
    }
}
