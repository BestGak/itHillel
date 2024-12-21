<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Core\Viewer;
use App\Controllers\Models\Posts as PostsAdminModel;
use App\Controllers\Models\CategoryPosts;
use App\Controllers\Models\Users;


class Posts extends Controller
{

    public function view()
    {
        $model = new PostsAdminModel();
        $this->data = ['data' => $model->get_all()];
        $this->admin_view('posts/posts-main');
    }

    public function update()
    {
        $model = new PostsAdminModel();
        $this->data = ['data' => $model->get_post_by_id($_GET['id'])];

        if(!empty($_POST))
        {
            $model->update(array_intersect_key(array_filter($_POST) , $model->to_array()));
        }

        $this->admin_view('posts/posts-update');
    }

    public function create(): void
    {
            if(!empty($_POST))
            {
                $model = new PostsAdminModel();
                $model->save(array_intersect_key(array_filter($_POST) , $model->to_array()));
            }
            $category_model = new CategoryPosts();
            $user_model = new Users();
            $this->data = [
                'category' => $category_model->get_all_category_posts(),
                'user' => $user_model->get_user_shorts(),
            
            ];
            $this->admin_view('posts/posts-create');
    }

    public function delete()
    {
        if(!empty($_GET['id'])) {
            $model = new PostsAdminModel();
            $model->delete($_GET['id']);
        }
        header('Location: /hillel/admin/posts');
    }
}
