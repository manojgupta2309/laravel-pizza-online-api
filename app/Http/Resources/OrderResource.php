<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class OrderResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [
            'order_id' => $this->id,
            'item_id' => $this->item_id,
            'item_qty' => $this->item_qty,
            'grand_total' => $this->grand_total,
            'item_name' => (string)$this->item_name,
            'cust_name' => (string)$this->cust_name,
            'cust_mobile_no' => (string)$this->cust_mobile_no,
            'cust_email' => (string)$this->cust_email,
            'cust_address' => (string)$this->cust_address,

            ];
    }
}
