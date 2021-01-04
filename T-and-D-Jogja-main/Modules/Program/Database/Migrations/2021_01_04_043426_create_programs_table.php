<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('short_description');
            $table->text('long_description');
            $table->string('periode_tanggal');
            $table->string('periode_hari');
            $table->string('periode_waktu');
            $table->string('thumbnail');
            $table->string('price');

            $table->foreignId('program_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('program_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('program_location_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('programs');
    }
}
