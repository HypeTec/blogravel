<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostParent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('comments', function (Blueprint $table) {
          $table->foreign('parent_id', 'post_parent_id_fk')->references('id')->on('comments')->onUpdate('cascade')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('comments', function (Blueprint $table) {
         $table->dropForeign('post_parent_id_fk');
     });
    }
}
