<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\Users as UsersAdminModel;


class Users extends Controller 
{
  public function view()
  {
      $model = new UsersAdminModel();
      $this->data = ['data' => $model->get_all_users()];
      $this->admin_view('users/users-main');
  }

  public function update()
  {
      $model = new UsersAdminModel();
      $this->data = ['data' => $model->get_post_by_id($_GET['id'])];
      $this->admin_view('users/users-update');
  }

  public function create(): void
  {
          if(!empty($_POST))
          {
              $model = new UsersAdminModel();
              $model->save(array_intersect_key(array_filter($_POST) , $model->to_array()));
          }
          $this->admin_view('users/users-create');
  }

  public function delete()
  {
      $model = new UsersAdminModel();
      $this->data = ['data' => $model->get_post_by_id($_GET['id'])];
      $this->admin_view('users/users-delete');
  }
}