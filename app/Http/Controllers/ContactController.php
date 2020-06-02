<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
     
      public function index(){
             
             return view('home_template');
      }


      public function getRecord(){
            return view('template');
      }



      public function addRecord(Request $request) {

         
            Contact::create([
                  'name' => $request->input('name'),
                  'email' => $request->input('email'),
                  'phone' => $request->input('phone'),

            ]);

            return ['success' => true , 'message' => 'New client added'];

      }




}
