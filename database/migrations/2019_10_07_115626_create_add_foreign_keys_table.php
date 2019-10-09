<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {

      $table -> bigInteger('category_id') -> unsigned() -> index();
      $table -> foreign('category_id', 'category')
             -> references('id')
             -> on('categories');
     });

     Schema::table('post_tag', function (Blueprint $table) {

     $table -> bigInteger('post_id') -> unsigned() -> index();
     $table -> foreign('post_id', 'post-tag_post')
            -> references('id')
            -> on('posts');
      });

      Schema::table('post_tag', function (Blueprint $table) {

      $table -> bigInteger('tag_id') -> unsigned() -> index();
      $table -> foreign('tag_id', 'tag-tag_post')
             -> references('id')
             -> on('tags');
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_foreign_keys');
        Schema::dropIfExists('post-tag_post');
        Schema::dropIfExists('tag-tag_post');
    }
}
