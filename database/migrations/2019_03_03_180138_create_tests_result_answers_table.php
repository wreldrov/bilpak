<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsResultAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_result_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('test_result_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('option_id');
            $table->boolean('correct')->default(0);
            $table->timestamps();

            $table->foreign('test_result_id')
                ->references('id')->on('tests_results')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_result_answers');
    }
}
