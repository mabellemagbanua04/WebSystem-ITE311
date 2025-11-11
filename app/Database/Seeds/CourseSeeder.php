<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Web Development 101',
                'description' => 'Introduction to HTML, CSS, and PHP.',
                'instructor_id' => 2,
            ],
            [
                'title' => 'Database Systems',
                'description' => 'Covers MySQL, normalization, and ERD.',
                'instructor_id' => 2,
            ],
        ];

        $this->db->table('courses')->insertBatch($data);
    }
}
