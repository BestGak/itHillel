<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\Posts as PostsAdminModel;

class Posts extends Controller
{
    public function view()
    {
        $model = new PostsAdminModel();
        $this->data = ['data' => $model->get_all_posts()];
        $this->admin_view('posts/posts-main');
    }

    public function update()
    {
        $model = new PostsAdminModel();
        $this->data = ['data' => $model->get_post_by_id($_GET['id'])];
        $this->admin_view('posts/posts-update');
    }

    public function create(): void
    {

            $this->admin_view('posts/posts-create');
    }

    public function delete()
    {
        $model = new PostsAdminModel();
        $this->data = ['data' => $model->get_post_by_id($_GET['id'])];
        $this->admin_view('posts/posts-delete');
    }
}
