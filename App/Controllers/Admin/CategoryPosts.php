<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\CategoryPosts as CategoryPostsAdminModel;

class CategoryPosts extends Controller
{

    const VIEW_MAIN = 'posts/posts-category-main';
    const VIEW_UPDATE = 'posts/posts-category-update';
    const VIEW_CREATE = 'posts/posts-category-create';
    const VIEW_DELETE = 'posts/posts-category-delete';


    public function __construct()
    {
        $this->model = new CategoryPostsAdminModel('test');
    }

    public function view()
    {
        $this->data = ['data' => $this->model->get_all_category_posts()];
        $this->model->get_all();
        $this->admin_view(self::VIEW_MAIN);
    }

    public function update()
    {
        $this->data = ['data' => $this->model->get_category_image_by_id($_GET['id'])];
        $this->admin_view(self::VIEW_UPDATE);
    }

    public function create(): void
    {
            if(!empty($_POST))
            {
                $this->model->save(array_intersect_key(array_filter($_POST) , $this->model->to_array()));
            }
            $this->admin_view(self::VIEW_CREATE);
    }

    public function delete()
    {
        $this->data = ['data' => $this->model->get_category_image_by_id($_GET['id'])];
        $this->admin_view(self::VIEW_DELETE);
    }
}
