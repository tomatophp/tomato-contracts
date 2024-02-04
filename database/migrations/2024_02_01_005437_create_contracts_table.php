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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->string('type')->default('project');

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('approved_by_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('account_id')->nullable()->constrained('accounts')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('project_id')->nullable()->constrained('projects')->onDelete('cascade');

            $table->string('title')->nullable();
            $table->longText('body')->nullable();

            $table->boolean('is_active')->default(0)->nullable();
            $table->boolean('is_completed')->default(0)->nullable();
            $table->boolean('is_approved')->default(0)->nullable();

            $table->json('placeholders')->nullable();

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
        Schema::dropIfExists('contracts');
    }
};
