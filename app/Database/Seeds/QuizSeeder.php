<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'lesson_id' => 1,
                'question' => 'What does HTML stand for?',
                'option_a' => 'Hyper Text Markup Language',
                'option_b' => 'High Text Machine Language',
                'option_c' => 'Hyper Tool Multi Language',
                'option_d' => 'None of the above',
                'correct_answer' => 'A',
            ],
            [
                'lesson_id' => 2,
                'question' => 'Which property is used for text color in CSS?',
                'option_a' => 'font-color',
                'option_b' => 'text-color',
                'option_c' => 'color',
                'option_d' => 'background-color',
                'correct_answer' => 'C',
            ],
        ];

        $this->db->table('quizzes')->insertBatch($data);
    }
}