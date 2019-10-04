<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ItemResource extends Resource
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
        'item_id' => $this->id,
        'item_name' => (string)$this->item_name,
        'item_des' => (string)$this->item_des,
        'item_amount' =>  $this->item_amount,
        'item_qty' =>  $this->item_qty,
        'item_img' => (string)$this->item_img,
        'isSpecial' => (boolean)$this->isSpecial,
        ];
    }
}
