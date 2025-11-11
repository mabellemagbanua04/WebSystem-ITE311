<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 3, // Student
                'course_id' => 1,
                'status' => 'active',
            ],
            [
                'user_id' => 3,
                'course_id' => 2,
                'status' => 'active',
            ],
        ];

        $this->db->table('enrollments')->insertBatch($data);
    }
}