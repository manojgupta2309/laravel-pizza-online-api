<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('item_name');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('item_qty');
            $table->unsignedInteger('grand_total');
            $table->string('cust_name');
            $table->string('cust_mobile_no');
            $table->string('cust_email');
            $table->text('cust_address');
            $table->timestamps();
        });


        DB::table('orders')->insert(
            array(
                [
                    'item_name' => 'Meal for 2 - Non-veg',
                    'item_id'=>1,
                    'item_qty'=>1,
                    'cust_name'=>'Manoj Gupta',
                    'cust_mobile_no'=>'1234567890',
                    'cust_email'=>'manoj@gmail.com',
                    'cust_address'=>'Hyderabad,India',
                    'grand_total'=>450,
                    'created_at'=>date('Y-m-d H:i:s')
                ]
             )
        );

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
