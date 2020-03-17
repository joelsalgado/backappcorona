<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('blog', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->text('titlle');
                $table->text('category');
                $table->text('datetime');
                $table->text('subtittle');
                $table->text('imsge');
                $table->longText('content');
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
        Schema::dropIfExists('table_blog');
    }
}
