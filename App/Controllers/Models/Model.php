<?php 

namespace App\Controllers\Models;

use ReflectionClass;
use ReflectionProperty;

abstract class Model 
{

    public function __construct($test)
    {
        var_dump($test);
    }

    public function get_all(): array 
    {
 
        $this->select -> set_table_name($this->table_name);
        $this->select -> set_fields($this->get_all_model_field());
        return $this->select-> execute();
    }

    public function get_all_model_field(): array
    {
        $result = [];
        $reflection = new ReflectionClass($this);
        $reflection_property = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($reflection_property as $property) {
            $result[] = $property->getName();
        }
        return $result;
    }

}