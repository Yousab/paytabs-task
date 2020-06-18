<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            'category_name' => 'Parent Category',
        ];

        // Simple Queries
        $this->db->query(
            "INSERT INTO category (name) VALUES(:category_name:)",
            $data
        );

        // Using Query Builder
        $this->db->table('category')->insert($data);
    }
}
