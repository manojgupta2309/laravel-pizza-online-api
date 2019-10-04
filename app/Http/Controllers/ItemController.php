<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
   
    public function getItems()
    {
      return ItemResource::collection(Item::all());
    }
    
   
}
