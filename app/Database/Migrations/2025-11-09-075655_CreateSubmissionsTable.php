<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubmissionsTable extends Migration
{
   public function up()
{
    $this->forge->addField([
        'id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
        'user_id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
        'quiz_id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
        'selected_answer' => ['type'=>'CHAR','constraint'=>1],
        'is_correct' => ['type'=>'BOOLEAN','default'=>false],
        'submitted_at' => ['type'=>'DATETIME','null'=>true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user_id','users','id','CASCADE','CASCADE');
    $this->forge->addForeignKey('quiz_id','quizzes','id','CASCADE','CASCADE');
    $this->forge->createTable('submissions', true);
}

public function down()
{
    $this->forge->dropTable('submissions', true);
}
}
