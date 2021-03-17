<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_details', function (Blueprint $table) {
            
            $table->id();

            $table->integer('no');
            $table->string('date');
            $table->string('name');
            $table->string('class');
            $table->string('section');
            $table->string('father_name');
            $table->integer('admission_no');

            $table->integer('admission_fee_rs');
            $table->integer('admission_fee_ps');

            $table->integer('caution_deposit_fee_rs');
            $table->integer('caution_deposit_fee_ps');

            $table->integer('annual_fee_rs');
            $table->integer('annual_fee_ps');

            $table->string('tution_fee_term');
            $table->integer('tution_fee_rs');
            $table->integer('tution_fee_ps');

            $table->string('bus_fee_term');
            $table->integer('bus_fee_rs');
            $table->integer('bus_fee_ps');

            $table->integer('registration_fee_rs');
            $table->integer('registration_fee_ps');

            $table->integer('prospectus_fee_rs');
            $table->integer('prospectus_fee_ps');


            $table->integer('others_fee_rs');
            $table->integer('others_fee_ps');

            $table->integer('total_fee_rs');
            $table->integer('total_fee_ps');


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
        Schema::dropIfExists('fees_details');
    }
}
