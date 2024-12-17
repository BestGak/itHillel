<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\Gallery as GalleryAdminModel;


class Gallery extends Controller
{

    public function view() 
    {
      $model = new GalleryAdminModel();
      $this->data = ['data' => $model->get_all_images()];
      $this -> admin_view('gallery/gallery-main');
    }

    public function update() 
    {
      $model = new GalleryAdminModel();
      $model -> get_all_images();
      $this->data = ['data' => $model->get_image_by_id($_GET['id'])];
      $this -> admin_view('gallery/gallery-update');   
    }

    public function create(): void
    {
        if(!empty($_POST))
        {
            $model = new GalleryAdminModel();
            $model->save(array_intersect_key(array_filter($_POST) , $model->to_array()));
        }
        $this->admin_view('gallery/gallery-create');
    }

    public function delete():void  
    {
      $model = new GalleryAdminModel();
      $model -> get_all_images();
      $this->data = ['data' => $model->get_image_by_id($_GET['id'])];
      $this -> admin_view('gallery/gallery-delete');   
    }

}