<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 125);
            $table->string('slug', 125);
            $table->longText('description');
            $table->string('thumbnail', 125);
            $table->longText('requirements');
            $table->longText('audience');
            $table->ecum('status', ['active', 'inactive'])->default('active');
            $table->foreignId('category_id');
            $table->foreignId('teacher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
