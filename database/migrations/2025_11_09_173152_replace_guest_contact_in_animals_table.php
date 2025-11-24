<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('animals', function (Blueprint $table) {

            $table->dropColumn('guest_contact');
            $table->string('guest_email', 100)->nullable()->after('user_id');
            $table->string('guest_phone', 20)->nullable()->after('guest_email');
        });
    }

    public function down(): void
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn(['guest_email', 'guest_phone']);
            $table->string('guest_contact', 100)->nullable()->after('user_id');
        });
    }
};
