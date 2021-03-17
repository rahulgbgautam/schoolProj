<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            
            $table->id();
            $table->integer('admission_num');
            $table->integer('roll_num');
            $table->string('student_name');
            $table->string('student_class');
            $table->string('student_sec');
            $table->string('slang');
            $table->string('tlang')->nullable();
            $table->string('ncc')->nullable();
 
            $table->string('mother_name');
            $table->string('father_name');
        
            $table->string('dob');
            $table->string('doj');

            $table->string('gender');
            $table->string('house');

            $table->string('religion');
            $table->string('nationality');

            

            $table->string('caste');
            $table->string('adhar_num');
            $table->string('adhar_num_value')->nullable();
            $table->string('school_lunch');
            $table->string('sibling');

            $table->string('sibling_name')->nullable();
            $table->string('sibling_class')->nullable();
            $table->string('sibling_sec')->nullable();
            
            $table->string('is_new_student');
            $table->string('previous_school_name')->nullable();
            $table->string('bus_transport_facility');
            $table->string('bus_num')->nullable();;
            $table->string('conductor_contact_num')->nullable();;
            $table->string('conductor_name')->nullable();;
            $table->string('bus_stoppage_points')->nullable();;
            
            $table->string('father_contact_num')->nullable();;
            $table->string('mother_contact_num')->nullable();

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
        Schema::dropIfExists('student_details');
    }
}
