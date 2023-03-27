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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('group_id');
            //customer detail
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('nationality');
            $table->string('gender');
            $table->string('passport_number');
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->date('date_of_birth');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone_no1');
            $table->string('phone_no2');
            $table->string('customer_email');
            //flight detail
            $table->bigInteger('flight_no');
            $table->date('arrival_date');
            $table->date('departure_date');
            //emergency contact detail
            $table->string('econtact_name');
            $table->string('econtact_email');
            $table->string('econtact_phone_no');
            $table->string('econtact_address');
            $table->string('relationship');
            //insurance detail
            $table->string('company_name');
            $table->bigInteger('policy_no');
            $table->string('company_email');
            $table->string('company_phone_no');
            //fitness detail
            $table->string('fitness_level')->nullable();
            $table->longText('outdoor_experience')->nullable();
            $table->longText('high_altitude')->nullable();
            $table->longText('training')->nullable();
            //signatur
            $table->text('signature')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
