<?php namespace Shohabbos\Like\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosLikeLikes2 extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_like_likes', function($table)
        {
            $table->integer('author_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_like_likes', function($table)
        {
            $table->dropColumn('author_id');
        });
    }
}
