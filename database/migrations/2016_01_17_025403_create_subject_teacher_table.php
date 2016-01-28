<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->integer('subject_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

            $table->primary(['subject_id', 'teacher_id']);

            $table->foreign('subject_id')->references('id')->on('subjects')
                ->onUpdated('cascade')
                ->onDelete('cascade');

            $table->foreign('teacher_id')->references('user_id')->on('teachers')
                ->onUpdated('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subject_teacher');
    }
}
