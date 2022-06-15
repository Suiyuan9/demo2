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
        Schema::create('tbl4_d_results', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('n1',4);
            $table->string('n2',4);
            $table->string('n3',4);
            $table->string('s1',4);
            $table->string('s2',4);
            $table->string('s3',4);
            $table->string('s4',4);
            $table->string('s5',4);
            $table->string('s6',4);
            $table->string('s7',4);
            $table->string('s8',4);
            $table->string('s9',4);
            $table->string('s10',4);
            $table->string('s11',4);
            $table->string('s12',4);
            $table->string('s13',4);
            $table->string('c1',4);
            $table->string('c2',4);
            $table->string('c3',4);
            $table->string('c4',4);
            $table->string('c5',4);
            $table->string('c6',4);
            $table->string('c7',4);
            $table->string('c8',4);
            $table->string('c9',4);
            $table->string('c10',4);
            $table->string('dd')->nullable();
            $table->string('dn')->nullable();
            $table->string('day')->nullable();
            
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
        Schema::dropIfExists('tbl4_d_results');
    }
};
