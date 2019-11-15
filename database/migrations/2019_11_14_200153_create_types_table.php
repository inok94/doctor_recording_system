<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('types')->insert(
            [
                [
                    'type' => 1,
                    'name' => 'Admin'
                ],
                [
                    'type' => 2,
                    'name' => 'Doctor'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('types')->truncate();
        Schema::dropIfExists('types');
    }
}
