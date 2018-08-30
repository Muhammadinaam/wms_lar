<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class AddTableRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');

            $table->string('idt')->nullable();
            $table->string('name')->nullable();

            $table->timestamps();
        });

        \DB::table('roles')
            ->insert(
            [
                'idt' => 'super_admin',
                'name' => 'Super Admin',
            ],
            [
                'idt' => 'admin',
                'name' => 'Admin',
            ],
            [
                'idt' => 'sub_user',
                'name' => 'Sub User',
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
        Schema::dropIfExists('roles');
    }
}
