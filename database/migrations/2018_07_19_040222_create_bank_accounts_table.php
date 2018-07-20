<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankAccount', function (Blueprint $table) {
            $table->increments('bankAccountID');
            $table->integer('companyID');
            $table->integer('bankAccountNo');
            $table->string('bankBranch');
            $table->string('bankName');
            $table->string('bankAccountName');
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
        Schema::dropIfExists('bankAccount');
    }
}
