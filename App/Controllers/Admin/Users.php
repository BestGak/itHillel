<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;

class Users extends Controller 
{
    public function view() 
    {
      $this -> admin_view('users/users-main');
    }
}