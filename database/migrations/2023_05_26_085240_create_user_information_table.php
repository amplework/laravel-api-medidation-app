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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('role');
            $table->string('name')->nullable();
            $table->string('about')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('about_moti')->nullable();
            $table->string('exp_info_status');
            $table->string('cover_img')->nullable();
            $table->string('profiles_img')->nullable();
            $table->string('schedule_status')->nullable();
            $table->integer('profile_status')->nullable();
            $table->string('status')->default(0);
            $table->date('date_time')->nullable();
            $table->softDeletes();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
