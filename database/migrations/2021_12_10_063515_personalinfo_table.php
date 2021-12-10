<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfo_table', function (Blueprint $table) {
            $table->id();
            $table->string('accountcode');
            $table->string('usercode');
            $table->string('name');
            $table->string('designation');
            $table->string('email')->unique();
            $table->string('birthdate');

            $table->string('department');
            $table->string('supervisor');
            $table->string('emp_type');
            $table->string('location');
            $table->string('datehired');
            $table->string('team');
            $table->string('date_reg');
            $table->string('date_sep');
            $table->string('contract_start');
            $table->string('contract_end');

            $table->string('monthly_rate');
            $table->string('daily_rate');
            $table->string('hourly_rate');
            $table->string('sequence_no');
            $table->string('approver');

            $table->string('tin');
            $table->string('phic');
            $table->string('sss');
            $table->string('hdmf');

            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('personalinfo_table');
    }
}
