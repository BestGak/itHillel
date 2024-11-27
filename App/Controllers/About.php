<?php 

namespace App\Controllers;

use App\Core\Viewer;

class About extends Controller
{

    public function view() 
    {
      $this -> public_view('about/about-main');
    }

    public function view_admin() 
    {
      $this -> admin_view('about/about-main');
    }

}