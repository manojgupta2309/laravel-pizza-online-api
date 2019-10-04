<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;
use App\Http\Resources\ContactResource;


class ContactController extends Controller
{
    public function getContacts()
    {
      return ContactResource::collection(Contact::all());
    }


    public function createContact(Request $request) {

        $contact = $request->json()->all();
        contact::create( [
            'name' =>  $contact['name'],
            'email'=>$contact['email'],
            'msg'=>$contact['msg'],
            'created_at'=>date('Y-m-d H:i:s')
        ]);
       
        return response()->json([
            "message" => "query submitted successfully",
            "status"=>true,
        ], 201);

       
    }
}
