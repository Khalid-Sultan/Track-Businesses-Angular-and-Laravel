<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpriseMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('enterprises')->unsigned();
            $table->foreign('enterprises')->references('id')->on('enterprises')->onDelete('cascade');
            $table->string('name');
            $table->boolean('gender')->default(false);
            $table->integer('age')->unsigned();
            $table->integer('member_levels')->unsigned();
            $table->foreign('member_levels')->references('id')->on('member_levels')->onDelete('cascade');

            $table->string('trained_career');
            $table->integer('member_job_sites')->unsigned();
            $table->foreign('member_job_sites')->references('id')->on('member_job_sites')->onDelete('cascade');

            $table->boolean('job_search')->default(false);

            $table->string('job_search_registered');

            $table->boolean('awareness_training')->default(false);
            $table->boolean('professional_training')->default(false);
            $table->boolean('professional_evaluation')->default(false);
            $table->boolean('professional_eval_eligibility')->default(false);

            $table->boolean('disabled')->default(false);
            $table->boolean('persecuted')->default(false);
            $table->boolean('living_with_aids')->default(false);
            $table->boolean('displaced')->default(false);
            $table->boolean('happiness')->default(false);

            $table->integer('membership_by_e_z_s')->unsigned();
            $table->foreign('membership_by_e_z_s')->references('id')->on('membership_by_e_z_s')->onDelete('cascade');

            $table->string('nation');
            $table->string('phone_number');
            $table->integer('member_job_types')->unsigned();
            $table->foreign('member_job_types')->references('id')->on('member_job_types')->onDelete('cascade');
            $table->float('salary_amount');
            $table->float('employement_period');
            $table->float('lasting_months');

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
        Schema::dropIfExists('enterprise_members');
    }
}
