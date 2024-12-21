<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class Gallery implements ModelInterface
{
    public string $name;
    public string $url;
    public int $category_id;
    private array $images = [
        [
            'id' => 1,
            'name' => 'Sunset Beach',
            'url' => 'sunset-beach.jpg',
            'category_id' => 101,
        ],
        [
            'id' => 2,
            'name' => 'Mountain Peaks',
            'url' => 'mountain-peaks.jpg',
            'category' => 'Nature',
            'category_id' => 101,
        ],
        [
            'id' => 3,
            'name' => 'Urban Skyline',
            'url' => 'urban-skyline.jpg',
            'category_id' => 102,
        ],
        [
            'id' => 4,
            'name' => 'Ancient Ruins',
            'url' => 'ancient-ruins.jpg',
            'category_id' => 103,
        ],
        [
            'id' => 5,
            'name' => 'Starry Night',
            'url' => 'starry-night.jpg',
            'category_id' => 104,
        ],
    ];
    
    public function get_all_images(): array 
    {
 
        return $this->images;
    }

    public function get_image_by_id(int $ID): array
{
    foreach ($this->images as $image) {
        if ($image['id'] === $ID) {
            return $image;
        }
    }
    throw new \Exception('Картинка с указаным айди не найдена');
}


    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('gallery');
        $insert->set_fields_and_values($data);
        $insert->execute();
        
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }
    
}