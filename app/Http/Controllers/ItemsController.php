<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index1(Request $request){
        
        $collection = [

            "gallery" => [
            [
                    
                    'item_id' => 101,
                    'item_name' => 'Non Veg Supreme',
                    'item_des' => 'Supreme combination of black olives, onion, capsicum, grilled mushroom, pepper barbecue chicken, peri-peri chicken & grilled chicken ',
                    'item_amount' => 645,
                    'item_img' => '/images/Non-Veg-Supreme.jpg',
                    'item_qty'=>1
            ],
            [
                    
                'item_id' => 102,
                'item_name' => 'Chicken Pepperoni',
                'item_des' => 'A classic American taste! Relish the delectable flavor of Chicken Pepperoni, topped with extra cheese',
                'item_amount' => 630,
                'item_img' => '/images/cheesepepperoni.png',
                'item_qty'=>1
            ],
            [
                    
                'item_id' => 103,
                'item_name' => 'Indi Chicken Tikka',
                'item_des' => 'The wholesome flavour of tandoori masala with Chicken tikka, onion, red paprika & mint mayo',
                'item_amount' => 600,
                'item_img' => '/images/IndianTandooriChickenTikka.jpg',
                'item_qty'=>1
            ],
            [
                    
                'item_id' => 104,
                'item_name' => 'Deluxe Veggie',
                'item_des' => 'Veg delight - onion, capsicum, grilled mushroom, corn & paneer',
                'item_amount' => 450,
                'item_img' => '/images/deluxeveg.png',
                'item_qty'=>1
            ],
            [
                    
                'item_id' => 105,
                'item_name' => 'Veg Extravaganza',
                'item_des' => 'Black olives, capsicum, onion, grilled mushroom, corn, tomato, jalapeno & extra cheese',
                'item_amount' => 450,
                'item_img' => '/images/vegextra.png',
                'item_qty'=>1
            ],
            [
                    
                'item_id' => 106,
                'item_name' => 'Chicken Golden Delight',
                'item_des' => 'Double pepper barbecue chicken, golden corn and extra cheese, true delight',
                'item_amount' => 525,
                'item_img' => '/images/golden.png',
                'item_qty'=>1
             ]
            ],
            "special" => [
                [
                        
                        'item_id' => 201,
                        'item_name' => 'Classic Combo - Veg',
                        'item_des' => 'Reg Cheese & Corn Pizza + Pepsi',
                        'item_amount' => 199,
                        'item_img' => '/images/meal_4_1_classic_veg.jpg',
                        'item_qty'=>1
                ],
                [
                        
                    'item_id' => 202,
                    'item_name' => 'Classic Combo - Non-veg',
                    'item_des' => 'Reg Chicken Sausage Pizza + Pepsi',
                    'item_amount' => 199,
                    'item_img' => '/images/meal_4_1_classic_nvg.jpg',
                    'item_qty'=>1
                ],
                [
                        
                    'item_id' => 203,
                    'item_name' => 'Meal for 1 - Non-veg',
                    'item_des' => 'Reg Pepper BBQ Chicken Pizza + Garlic Bread + Pepsi',
                    'item_amount' => 295,
                    'item_img' => '/images/meal_4_1_gb_combo_nvg.jpg',
                    'item_qty'=>1
                ],
                [
                        
                    'item_id' => 204,
                    'item_name' => 'Meal for 2 - Veg - Farmhouse',
                    'item_des' => 'Med Farmhouse Pizza + Garlic Bread + Pepsi',
                    'item_amount' => 485,
                    'item_img' => '/images/meal_4_2_gb_farmhouse.jpg',
                    'item_qty'=>1
                ],
                [
                        
                    'item_id' => 205,
                    'item_name' => 'Meal for 2 - Non-veg',
                    'item_des' => 'Med Pepper BBQ Chicken Pizza + Garlic Bread + Pepsi',
                    'item_amount' => 495,
                    'item_img' => '/images/the-perfect-meal-for-two-nv.jpg',
                    
                 ]
                ] 
        ];
     
      return response()->json($collection);
    }

    public function store(Request $request){


    }

    public function index()
    {
      return BookResource::collection(Book::with('ratings')->paginate(25));
    }

  
}

