<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->bigInteger('user_id')->unsigned();
            $table->mediumText('subtotal');
            $table->mediumText('tax');
            $table->mediumText('total');
            $table->string('name');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode');
            $table->enum('status',['Đã đặt hàng','Đã giao hàng','Đã hủy'])->default('Đã đặt hàng');
            $table->boolean('is_shipping_defferenet')->default(false);
            $table->enum('notify',[1,0])->default(1);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
}
