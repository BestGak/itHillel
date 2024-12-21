<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\Gallery as GalleryAdminModel;


class Gallery extends Controller
{


  public function __construct()
  {
      $this->model = new GalleryAdminModel();
      
  }

    public function view() 
    {
      $this->data = ['data' => $this->model->get_all_images()];
      $this -> admin_view('gallery/gallery-main');
    }

    public function update() 
    {
      $this->model -> get_all_images();
      $this->data = ['data' => $this->model->get_image_by_id($_GET['id'])];
      $this -> admin_view('gallery/gallery-update');   
    }

    public function create(): void
    {
        if(!empty($_POST))
        {
            $this->model->save(array_intersect_key(array_filter($_POST) , $this->model->to_array()));
        }
        $this->admin_view('gallery/gallery-create');
    }

    public function delete():void  
    {
      $this->model -> get_all_images();
      $this->data = ['data' => $this->model->get_image_by_id($_GET['id'])];
      $this -> admin_view('gallery/gallery-delete');   
    }

}