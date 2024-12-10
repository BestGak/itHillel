<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class Posts
{
    private array $posts = [
        ['id' => 1, 'title' => 'Введение в PHP', 'content' => 'PHP — популярный скриптовый язык для веб-разработки.', 'category' => 'Программирование', 'category_id' => 201],
        ['id' => 2, 'title' => 'Понимание массивов', 'content' => 'Массивы — это важная структура данных в программировании.', 'category' => 'Программирование', 'category_id' => 201],
        ['id' => 3, 'title' => 'Советы по эффективной работе', 'content' => 'Организация рабочего процесса помогает достигать целей быстрее.', 'category' => 'Продуктивность', 'category_id' => 202],
        ['id' => 4, 'title' => 'Путешествия по Европе', 'content' => 'Европа — это множество культур и архитектурных стилей.', 'category' => 'Путешествия', 'category_id' => 203],
        ['id' => 5, 'title' => 'Здоровый образ жизни', 'content' => 'Сбалансированное питание и спорт укрепляют здоровье.', 'category' => 'Здоровье', 'category_id' => 204],
    ];

    public function __construct()
    {
        $insert = new Insert();
        $insert->set_table_name('posts');
        $insert->set_fields_and_values($this->posts);

        echo $insert->build_sql(); 
    }

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
}
