<?php

namespace App\Controllers\Models;

use App\Sql\Insert;
use App\Sql\Delete;
use App\Sql\Update;


class Posts
{
    public int $id;
    public string $title;
    public string $content;
    public int $author_id;
    public int $category_id;
    public string $created;
    public string $updated;
    public $posts = [ ['id' => 1, 'title' => 'Введение в PHP', 'content' => 'PHP — популярный скриптовый язык для веб-разработки.', 'category' => 'Программирование', 'category_id' => 201],
    ['id' => 2, 'title' => 'Понимание массивов', 'content' => 'Массивы — это важная структура данных в программировании.', 'category' => 'Программирование', 'category_id' => 201]];
    
    public function get_all_posts(): array
    {
        return $this->posts;
    }

    public function get_post_by_id(int $id): array
    {
        foreach ($this->posts as $post) {
            if ($post['id'] === $id) {
                return $post;
            }
        }
        throw new \Exception("Пост с ID {$id} не найден");
    }

    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('posts');
        $insert->set_fields_and_values($data);
        $insert->execute();
        
    }

    public function update(array $data)
    {

        $update = new Update();
        $update->set_table_name('posts');
        $update->set_data($data);
        $update->execute();
        
    }

    public function delete($id) 
    {

        $delete = new Delete();
        $delete->set_table_name('posts');
        $delete->and_where(['id', '=' , $id]);
        $delete->execute();

    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}
