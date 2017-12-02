<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestructurePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        	$table->unsignedInteger('id', true);
	        $table->string('title');
            $table->string('subtitle'); // 文章副标题
			$table->text('content_raw');// Markdown格式文本
			$table->text('content_html'); // 使用 Markdown 编辑内容但同时保存 HTML 版本
			$table->string('page_image');  // 文章缩略图（封面图）
			$table->string('meta_description'); // 文章备注说明
			$table->boolean('is_draft'); // 该文章是否是草稿
	        $table->string('layout')->default('blog.layouts.post'); // 使用的布局
	        $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
	        $table->dropColumn('id');
	        $table->dropColumn('title');
	        $table->dropColumn('subtitle');
	        $table->dropColumn('content_raw');
	        $table->dropColumn('content_html');
	        $table->dropColumn('page_image');
	        $table->dropColumn('meta_description');
	        $table->dropColumn('is_draft');
	        $table->dropColumn('layout');
	        $table->dropTimestampsTz();
        });
    }
}
