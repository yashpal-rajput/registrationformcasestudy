<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
 public function index()
 {
    return view("form");
 }
 public function register(Request $request)
 {
   $request->validate(
    [
      "name"=>"required",
      "email"=>"required|email",
      "password"=>"required|alpha_num|min:5",
      "image"=>"required",
      "area"=>"required",
          ]
    );
  echo "<pre>";
  print_r($request->all());
}
}