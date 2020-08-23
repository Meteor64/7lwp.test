<?php

class DB
{
    private $table;

    public function all()
    {
        return "SELECT * FROM {$this->table}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(',', $columns) : "*";
        echo "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function destroy($id)
    {
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }
}