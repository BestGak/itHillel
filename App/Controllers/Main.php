<?php 

namespace App\Controllers;

use App\Core\Viewer;

class Main extends Controller
{

   public function view() 
   {
   $this -> data = [
      'test' => 'Main',
      'test1' => 'About',
   ];
     $this -> public_view();
   }

   public function view_admin() 
   {
     $this -> admin_view();
   }

}