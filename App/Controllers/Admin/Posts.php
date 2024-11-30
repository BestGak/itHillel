<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;

class Posts extends Controller 
{
    public function view_admin() 
    {
      $this -> admin_view('posts/posts-main');
    }
}