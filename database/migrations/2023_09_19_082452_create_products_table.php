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
        Schema::create('products', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->text('description');
            // $table->string('price');
            // $table->string('quantity');
            // $table->string('image');
            // // $table->string("category_id");
            // $table->unsignedBigInteger('category_id'); // Add foreign key column

            // $table->foreign('category_id')
            //     ->references('id')
            //     ->on('categories')
            //     ->onDelete('cascade');

            // $table->timestamps();
            
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
