<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->string('title_nl', 100);
            $table->string('intro_nl', 1500);
            $table->string('content_en', 5000);
            $table->string('tag_nl', 15);
            
            $table->string('title_en', 100);
            $table->string('intro_en', 1500);
            $table->string('content_en', 5000);
            $table->string('tag_en', 15);
            
            $table->string('image');

            
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
        Schema::dropIfExists('blogs');
    }
}
