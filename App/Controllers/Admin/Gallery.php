<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;

class Gallery extends Controller
{

    public function view() 
    {
      $this -> admin_view('gallery/gallery-main');
    }

}