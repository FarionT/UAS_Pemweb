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
            $table->string('type_id');
            // $table->integer('type_id')->comment('1:OE, 2:OI, 3:AE, 4:AI, 5:IT, 6:PC, 7:ODOM, 8:ADOM');
            $table->date('order_date');
            $table->string('shipper');
            $table->string('consignee');
            $table->string('notifyparty');
            $table->string('party');
            $table->string('qty');
            $table->date('stuffing_date');
            $table->string('pol');
            $table->string('pod');
            $table->string('vsl');
            $table->date('etd');
            $table->string('marking');
            $table->string('description');
            $table->integer('gw');
            $table->integer('nw');
            $table->float('meas');
            $table->string('notes')->nullable();
            $table->string('pickup_add')->nullable()->default(NULL);
            $table->string('delivery_add')->nullable()->default(NULL);

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
