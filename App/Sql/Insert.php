<?php

namespace App\Sql;

class Insert
{
    private string $table_name;
    private array $field_set;
    private array $values;

    public function set_table_name(string $table_name): void
    {
        if (empty($table_name)) {
            throw new \Exception("Название таблицы не может быть пустым");
        }
        $this->table_name = $table_name;
    }

    public function set_field_set(array $field_set): void
    {
        if (empty($field_set) || !array_reduce($field_set, fn($carry, $field) => $carry && is_string($field), true)) {
            throw new \Exception("Поля должны быть массивом строк");
        }
        $this->field_set = $field_set;
    }

    public function set_values(array $values): void
    {
        if (empty($values) || !$this->is_multidimensional_array($values)) {
            throw new \Exception("Значения должны быть не пустым многомерным массивом");
        }

        $first_keys = array_keys($values[0]);
        foreach ($values as $value) {
            if (array_keys($value) !== $first_keys) {
                throw new \Exception("Ключи всех массивов значений должны совпадать");
            }
        }
        $this->values = $values;
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

    private function is_multidimensional_array(array $array): bool
    {
        return isset($array[0]) && is_array($array[0]);
    }

    private function get_values(): string
    {
        $result = [];
        foreach ($this->values as $value) {
            $result[] = '(' . implode(', ', array_map(fn($val) => "'" . addslashes($val) . "'", $value)) . ')';
        }

        return implode(', ', $result);
    }
}
