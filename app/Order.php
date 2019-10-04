<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
    protected $fillable = ['item_name', 'item_id', 'item_qty','cust_name','cust_mobile_no','cust_email','grand_total','cust_address','created_at'];
}
