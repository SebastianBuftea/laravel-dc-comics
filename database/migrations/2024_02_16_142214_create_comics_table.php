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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->text('description');
            $table->text('thumb');
            $table->float('price', 5, 2);
            $table->string('series', 40);
            $table->date('sale_date');
            $table->string('type', 40);
            $table->string('artists', 100);
            $table->text('writers');
            $table->text('artists');
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
        Schema::dropIfExists('comics');
    }
};
