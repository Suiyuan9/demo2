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
        Schema::create('toto_sites', function (Blueprint $table) {
            $table->id();
            $table->string('siteName',100);
            $table->string('flag',3);
            $table->string('country',50);
            $table->string('siteImage');
            $table->string('color',50);
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
        Schema::dropIfExists('toto_sites');
    }
};
