<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuizzesTable extends Migration
{
   public function up()
{
    $this->forge->addField([
        'id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
        'lesson_id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
        'question' => ['type'=>'TEXT'],
        'option_a' => ['type'=>'VARCHAR','constraint'=>255],
        'option_b' => ['type'=>'VARCHAR','constraint'=>255],
        'option_c' => ['type'=>'VARCHAR','constraint'=>255],
        'option_d' => ['type'=>'VARCHAR','constraint'=>255],
        'correct_answer' => ['type'=>'CHAR','constraint'=>1],
        'created_at' => ['type'=>'DATETIME','null'=>true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('lesson_id','lessons','id','CASCADE','CASCADE');
    $this->forge->createTable('quizzes', true);
}

public function down()
{
    $this->forge->dropTable('quizzes', true);
}
}
