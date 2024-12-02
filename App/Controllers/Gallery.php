<?php 

namespace App\Controllers;

use App\Core\Viewer;
use App\Controllers\Models\Gallery as GalleryAdminModel;

class Gallery extends Controller
{

    
    public function view() 
    {
      $model = new GalleryAdminModel();
      $model -> get_all_images();
      $this->data = ['data' => $model->get_all_images()];
      $this -> public_view('gallery/gallery-main');
    }

    public function update() 
    {
      $model = new GalleryAdminModel();
      $model -> get_all_images();
      $this->data = ['data' => $model->get_image_by_id($_GET['id'])];
      $this -> public_view('gallery/gallery-update');   
    }

    public function create():void 
    {
      $this -> public_view('gallery/gallery-create');   
    }

    public function delete():void  
    {
      $model = new GalleryAdminModel();
      $model -> get_all_images();
      $this->data = ['data' => $model->get_image_by_id($_GET['id'])];
      $this -> public_view('gallery/gallery-delete');   
    }
   
}