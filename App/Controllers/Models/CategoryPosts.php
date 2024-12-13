<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class CategoryPosts 
{
    public string $id;
    public string $name_category;
    
    private array $posts = [
        [
            'id' => 1,
            'name' => 'Sunset Beach', 
        ],
        [
            'id' => 2,
            'name' => 'Mountain Peaks',         
        ],
        [
            'id' => 3,   
            'name' => 'Funny Ship',               
        ],
        [
            'id' => 4,
            'name' => 'Ancient Ruins',
          
        ],
        [
            'id' => 5,
            'name' => 'Starry Night',
        ],
    ];
    
    public function get_all_category_posts(): array 
    {
 
        return $this->posts;
    }

    public function get_category_image_by_id(int $ID): array
{
    foreach ($this->posts as $post) {
        if ($post['id'] === $ID) {
            return $post;
        }
    }
    throw new \Exception('Категория постов с указаным айди не найдена');
}


    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('post_category');
        $insert->set_fields_and_values($data);
        $insert->execute();
        
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
    
}