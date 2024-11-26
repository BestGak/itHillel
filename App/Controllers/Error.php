<?php

namespace App\Controllers;

class Error extends Controller
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
