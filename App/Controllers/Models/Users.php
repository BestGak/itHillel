<?php

namespace App\Controllers\Models;

use App\Sql\Insert;

class Users
{
    public string $name;
    public string $password;
    public int $email;
    private array $users = [
        [
            'id' => 1,
            'name' => 'Alice',
            'password' => 'password123',
            'email' => 'alice@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Bob',
            'password' => 'securePass456',
            'email' => 'bob@example.com',
        ],
        [
            'id' => 3,
            'name' => 'Charlie',
            'password' => 'charlie789!',
            'email' => 'charlie@example.com',
        ],
    ];

    public function get_all_users(): array
    {
        return $this->users;
    }

    public function get_post_by_id(int $id): array
    {
        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        throw new \Exception("Пользователь с ID {$id} не найден");
    }

    public function save(array $data)
    {

        $insert = new Insert();
        $insert->set_table_name('users');
        $insert->set_fields_and_values($data);
        $insert->execute();
        
    }

    public function to_array()
    {
        return get_class_vars(get_class($this));
    }

}
