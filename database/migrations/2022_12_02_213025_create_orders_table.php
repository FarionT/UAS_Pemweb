<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->string('pickup_add');
            $table->string('delivery_add');
            $table->date('order_date');
            $table->string('batch_no');
            $table->string('to');
            $table->string('attn');
            $table->string('shipper');
            $table->string('cosignee');
            $table->string('notifyparty');
            $table->string('party');
            $table->string('qty');
            $table->string('cont');
            $table->string('seal_no');
            $table->integer('tare_weight');
            $table->date('stuffing_date');
            $table->string('pol');
            $table->string('vsl');
            $table->date('etd_jkt');
            $table->date('etd_sin');
            $table->string('vsl');
            $table->date('etd_sin');
            $table->date('eta_lax');
            $table->date('eta_chi');
            $table->string('kpbc');
            $table->integer('peb');
            $table->date('req_date');
            $table->string('marking');
            $table->string('description');
            $table->integer('gw');
            $table->integer('nw');
            $table->integer('meas');
            $table->string('notes');
            $table->integer('user_id');
            $table->boolean('accept')->default(0);
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
        Schema::dropIfExists('orders');
    }
};
