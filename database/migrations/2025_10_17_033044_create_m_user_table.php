<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id(); // Auto-increment id field
            $table->string('username'); // varchar field
            $table->string('password'); // varchar field
            $table->string('firstname')->nullable(); // firstname, nullable
            $table->string('lastname')->nullable(); // lastname, nullable
            $table->integer('role'); // int field
            $table->boolean('isactive')->default(1); // bit field with default value 1
            $table->timestamp('createddate')->useCurrent(); // datetime with current timestamp
            $table->string('createdby'); // createdby field
            $table->timestamp('updateddate')->useCurrent()->nullable(); // datetime with current timestamp, nullable
            $table->string('updatedby')->nullable(); // updatedby field, nullable
            $table->boolean('isdeleted')->default(1); // bit field with default value 1

            $table->primary('id'); // Set id as primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_user');
    }
}
