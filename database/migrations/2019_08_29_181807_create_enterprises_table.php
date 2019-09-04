<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identification')->unique();
            $table->string('EnterpriseName');

            $table->integer('type_of_entrepreneurial_institutions')->unsigned();
            $table->foreign('type_of_entrepreneurial_institutions')->references('id')->on('type_of_entrepreneurial_institutions')->onDelete('cascade');

            $table->integer('address_zones')->unsigned();
            $table->foreign('address_zones')->references('id')->on('address_zones')->onDelete('cascade');
            $table->integer('zone')->unsigned();
            $table->integer('kebele')->unsigned();
            $table->integer('address_scopes')->unsigned();
            $table->foreign('address_scopes')->references('id')->on('address_scopes')->onDelete('cascade');
            $table->string('location_identity');
            $table->string('house_number');
            $table->string('phone_number');

            $table->string('age_of_establishment');

            $table->integer('operating_sectors')->unsigned();
            $table->foreign('operating_sectors')->references('id')->on('operating_sectors')->onDelete('cascade');
            $table->integer('operating_sub_sectors')->unsigned();
            $table->foreign('operating_sub_sectors')->references('id')->on('operating_sub_sectors')->onDelete('cascade');

            $table->integer('enterprise_type_by_definitions')->unsigned();
            $table->foreign('enterprise_type_by_definitions')->references('id')->on('enterprise_type_by_definitions')->onDelete('cascade');
            $table->integer('organizational_types')->unsigned();
            $table->foreign('organizational_types')->references('id')->on('organizational_types')->onDelete('cascade');

            $table->string('tax_payer_id');
            $table->integer('organizations')->unsigned();
            $table->foreign('organizations')->references('id')->on('organizations')->onDelete('cascade');
            $table->integer('institutional_statuses')->unsigned();
            $table->foreign('institutional_statuses')->references('id')->on('institutional_statuses')->onDelete('cascade');
            $table->integer('institutional_reasons')->unsigned();
            $table->foreign('institutional_reasons')->references('id')->on('institutional_reasons')->onDelete('cascade');

            $table->float('base_capital_size')->unsigned();
            $table->integer('capital_sources')->unsigned();
            $table->foreign('capital_sources')->references('id')->on('capital_sources')->onDelete('cascade');

            $table->float('loan_credit_size')->unsigned();
            $table->string('time_of_loan');
            $table->float('post_credit_size')->unsigned();
            $table->float('refund_credit_size')->unsigned();
            $table->float('return_credit_size')->unsigned();
            $table->string('time_of_return');

            $table->float('time_made_size')->unsigned();
            $table->string('time_of_credit_made');

            $table->integer('enterprise_architecture_sources')->unsigned();
            $table->foreign('enterprise_architecture_sources')->references('id')->on('enterprise_architecture_sources')->onDelete('cascade');
            $table->float('hectare_size')->unsigned();
            $table->float('rent_per_month')->unsigned();
            $table->string('released_time');

            $table->float('market_size')->unsigned();
            $table->string('market_created_time');
            $table->integer('market_connection_types')->unsigned();
            $table->foreign('market_connection_types')->references('id')->on('market_connection_types')->onDelete('cascade');
            $table->integer('market_connection_creator_institutions')->unsigned();
            $table->foreign('market_connection_creator_institutions')->references('id')->on('market_connection_creator_institutions')->onDelete('cascade');
            $table->integer('market_connection_creator_markets')->unsigned();
            $table->foreign('market_connection_creator_markets')->references('id')->on('market_connection_creator_markets')->onDelete('cascade');

            $table->integer('enterprise_levels')->unsigned();
            $table->foreign('enterprise_levels')->references('id')->on('enterprise_levels')->onDelete('cascade');
            $table->string('standard_time');

            $table->boolean('technical_skill')->default(false);
            $table->boolean('kaiser_service')->default(false);
            $table->boolean('tech_support')->default(false);
            $table->boolean('dev_support')->default(false);
            $table->boolean('recognition')->default(false);
            $table->boolean('certificate')->default(false);

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
        Schema::dropIfExists('enterprises');
    }
}
