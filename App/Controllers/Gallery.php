<?php 

namespace App\Controllers;

use App\Core\Viewer;

class Gallery extends Controller
{

    
    public function view() 
    {
      $this -> public_view('gallery/gallery-main');
    }

    public function view_admin() 
    {
      $this -> admin_view('gallery/gallery-main');
    }

    public function create() 
    {
        
    }

    public function delete() 
    {
        
    }
   
}