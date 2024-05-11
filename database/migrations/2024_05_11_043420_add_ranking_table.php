<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->increments('RankingID');
            $table->unsignedInteger('UserID');
            $table->unsignedInteger('Position');
            
            // Define the foreign key constraint
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
        });

        // Set the initial ranking position based on user points
        DB::statement('
            INSERT INTO rankings (UserID, Position)
            SELECT id, @rownum := @rownum + 1 AS Position
            FROM users
            CROSS JOIN (SELECT @rownum := 0) r
            ORDER BY points DESC
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};
