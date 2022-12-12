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
            $table->string('pickup_add')->nullable()->default(NULL);
            $table->string('delivery_add')->nullable()->default(NULL);
            $table->string('si_no');
            $table->date('order_date');
            $table->string('bc_no');
            $table->string('to');
            $table->string('attn');
            $table->string('shipper');
            $table->string('consignee');
            $table->string('notifyparty');
            $table->string('party');
            $table->string('qty');
            $table->string('cont');
            $table->string('seal_no');
            $table->integer('tare_weight');
            $table->date('stuffing_date');
            $table->string('pol');
            $table->string('pod');
            $table->string('vsl');
            $table->date('etd_jkt');
<<<<<<< HEAD
            $table->date('eta_sin');
            $table->string('m_vsl');
=======
>>>>>>> 531cd2a52e951513de0004dff9e1691534bc6870
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
            $table->string('notes')->nullable();

            $table->string('shipping_ref');
            $table->string('hbl_num');
            $table->string('scac_code');
            $table->string('place_of_receipt');
            $table->string('port_of_loading');
            $table->string('port_of_discharge');
            $table->string('place_of_delivery');
            $table->string('bl_form');
            $table->string('place_of_issue');
            $table->string('freight');
            $table->integer('container_seal_no');


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
