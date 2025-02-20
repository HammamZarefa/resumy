<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTransactionsTable extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id', 'project_fk_9908159')->references('id')->on('projects');
            $table->unsignedBigInteger('transaction_type_id')->nullable();
            $table->foreign('transaction_type_id', 'transaction_type_fk_9908160')->references('id')->on('transaction_types');
            $table->unsignedBigInteger('income_source_id')->nullable();
            $table->foreign('income_source_id', 'income_source_fk_9908161')->references('id')->on('income_sources');
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->foreign('currency_id', 'currency_fk_9908163')->references('id')->on('currencies');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9908262')->references('id')->on('teams');
        });
    }
}
