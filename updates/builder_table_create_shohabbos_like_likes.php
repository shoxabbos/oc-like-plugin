<?php namespace Shohabbos\Like\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosLikeLikes extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_like_likes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('attachment_id')->unsigned();
            $table->string('attachment_type');
            $table->timestamp('created_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_like_likes');
    }
}
