<?php namespace Shohabbos\Like\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosLikeLikes extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_like_likes', function($table)
        {
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_like_likes', function($table)
        {
            $table->dropColumn('updated_at');
        });
    }
}
