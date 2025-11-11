<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course_id' => 1,
                'title' => 'Introduction to HTML',
                'content' => 'HTML basics, elements, and tags.',
            ],
            [
                'course_id' => 1,
                'title' => 'CSS Basics',
                'content' => 'Selectors, properties, and layout.',
            ],
            [
                'course_id' => 2,
                'title' => 'Understanding ER Diagrams',
                'content' => 'Learn how to design entity relationships.',
            ],
        ];

        $this->db->table('lessons')->insertBatch($data);
    }
}
