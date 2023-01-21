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
        DB::statement("CREATE VIEW VE_Bookmarks AS
        SELECT b.bookmark_id, b.title, b.description, b.url, b.codeShare, b.user_id, GROUP_CONCAT(t.tag SEPARATOR ',') as tags 
        FROM bookmarks as b 
        INNER JOIN bookmarks_tags as bt ON bt.bookmark_id = b.bookmark_id 
        INNER JOIN tags as t ON T.tag_id = bt.tag_id 
        GROUP BY b.bookmark_id, b.title, b.description, b.url, b.codeShare, b.user_id;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `VE_Bookmarks`");
    }
   
};
