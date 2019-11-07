<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned()->index();
            $table->string('title', 255)->index();
            $table->string('type', 50);
            $table->float('price')->nullable();
            $table->string('devise', 10)->nullable();
            $table->longText('description');
            $table->string('address', 100);
            $table->string('country', 50);
            $table->string('city',50);
            $table->string('phone',20);
            $table->string('slug',255);
            $table->integer('code');
            $table->boolean('active')->default(true);

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
        Schema::dropIfExists('announces');
    }
}
