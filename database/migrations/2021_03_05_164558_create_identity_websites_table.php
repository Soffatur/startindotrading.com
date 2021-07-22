<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentityWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_websites', function (Blueprint $table) {
            $table->id();
            $table->string('name_website');
            $table->string('logo');
            $table->string('favicon');
            $table->string('og_title');
            $table->string('og_sitename');
            $table->string('og_image');
            $table->string('og_description');
            $table->string('url');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('email');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('footer');
            $table->string('title');
            $table->text('content');
            $table->string('button');
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
        Schema::dropIfExists('identity_websites');
    }
}
