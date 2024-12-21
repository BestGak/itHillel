<?php 

namespace App\Controllers;

use App\Core\Viewer;
use App\Controllers\Models\ModelInterface;


class Controller
{

    protected ?ModelInterface $model = NULL;
    protected array $data = [];
    
    public function public_view(string $part_name = 'main')
    {

        $view = new Viewer();
        $view -> setData($this -> data);
        $view -> include_public_template($part_name);

    }

    public function admin_view(string $part_name = 'main')
    {

        $view = new Viewer();
        $view -> setData($this -> data);
        $view -> include_admin_template($part_name);

    }

    

}