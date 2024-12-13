<?php

namespace App\Sql;

use App\Sql\Connector;
use PDO;

class Delete
{
    private string $table_name;
    private $where;
    private PDO $connect;


    public function __construct()
    {
        $this->connect = (new Connector())->connect();
        
    }

    public function set_table_name(string $table_name): void
    {
        if (empty($table_name)) {
            throw new \Exception("Название таблицы не может быть пустым");
        }
        $this->table_name = $table_name;
    }


    public function build_sql(): string
    {
        if (empty($this->table_name) || empty($this->field_set) || empty($this->values)) {
            throw new \Exception("Название таблицы, поля и значения должны быть заданы");
        }

        return 'INSERT INTO ' . $this->table_name
            . ' (' . implode(', ', $this->field_set) . ') VALUES '
            . $this->get_values();
    }

    public function execute()
    {
        $this->connect->query($this->build_sql());
    }

    
}
