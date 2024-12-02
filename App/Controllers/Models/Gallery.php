<?php

namespace App\Controllers\Models;

class Gallery 
{
    private array $images = [
        [
            'id' => 1,
            'name' => 'Sunset Beach',
            'image_url' => 'sunset-beach.jpg',
            'category' => 'Nature',
            'category_id' => 101,
        ],
        [
            'id' => 2,
            'name' => 'Mountain Peaks',
            'image_url' => 'mountain-peaks.jpg',
            'category' => 'Nature',
            'category_id' => 101,
        ],
        [
            'id' => 3,
            'name' => 'Urban Skyline',
            'image_url' => 'urban-skyline.jpg',
            'category' => 'City',
            'category_id' => 102,
        ],
        [
            'id' => 4,
            'name' => 'Ancient Ruins',
            'image_url' => 'ancient-ruins.jpg',
            'category' => 'History',
            'category_id' => 103,
        ],
        [
            'id' => 5,
            'name' => 'Starry Night',
            'image_url' => 'starry-night.jpg',
            'category' => 'Astronomy',
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

    
}