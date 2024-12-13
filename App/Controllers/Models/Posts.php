<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class Posts
{
    // private array $posts = [];
    public int $id;
    public string $title;
    public string $content;
    public int $author_id;
    public int $category_id;
    public string $created;
    public string $updated;

    public function get_all_posts(): array
    {
        return [ ['id' => 1, 'title' => 'Введение в PHP', 'content' => 'PHP — популярный скриптовый язык для веб-разработки.', 'category' => 'Программирование', 'category_id' => 201],
        ['id' => 2, 'title' => 'Понимание массивов', 'content' => 'Массивы — это важная структура данных в программировании.', 'category' => 'Программирование', 'category_id' => 201]];
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

    public function to_array()
    {
        return get_class_vars(get_class($this));
        // return [
        //     'id' => $this->id,
        //     'title' => $this->title,
        //     'content' => $this->content,
        //     'author_id' => $this->author_id,
        //     'category_id' => $this->category_id,
        //     'created' => $this->created,
        //     'updated' => $this->updated,
        // ];
    }

}
