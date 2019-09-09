<?php namespace Shohabbos\Like\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosLikeViews extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_like_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('attachment_id')->unsigned();
            $table->string('attachment_type');
            $table->integer('author_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_like_views');
    }
}
