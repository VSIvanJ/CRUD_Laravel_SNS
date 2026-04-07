<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id_pedido')->unsigned()->autoIncrement();
            //Conexion a tabla menu
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')
            ->references('id_menu')->on('menus')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('cliente',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
