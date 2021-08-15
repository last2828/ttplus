<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('key')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('head_image')->nullable();
            $table->string('partner_title')->nullable();
            $table->text('partner_title_description')->nullable();
            $table->json('features_content')->nullable();
            $table->string('quote_title')->nullable();
            $table->string('years_title')->nullable();
            $table->json('years_1')->nullable();
            $table->json('years_2')->nullable();
            $table->json('years_3')->nullable();
            $table->json('blocks_1')->nullable();
            $table->json('blocks_2')->nullable();
            $table->json('blocks_3')->nullable();
            $table->json('awards')->nullable();
            $table->json('licenses')->nullable();
            $table->json('shows')->nullable();

            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();

//          $table->string('key')->nullable();
//          $table->longText('value');
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
        Schema::dropIfExists('page_fields');
    }
}
