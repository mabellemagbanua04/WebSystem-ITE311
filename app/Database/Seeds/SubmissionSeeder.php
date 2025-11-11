<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 3,
                'quiz_id' => 1,
                'selected_answer' => 'A',
                'is_correct' => true,
            ],
            [
                'user_id' => 3,
                'quiz_id' => 2,
                'selected_answer' => 'C',
                'is_correct' => true,
            ],
        ];

        $this->db->table('submissions')->insertBatch($data);
    }
}
