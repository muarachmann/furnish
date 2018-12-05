<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){

        return view('index');
    }

    public function getAbout(){

    }

    public function getContact(){
        return view('contact');
    }

    public function getShop(){
        return view('shop');
    }

    public function getProductDetails($id){
        return view('product-details');
    }

    public function getCheckout(){
        return view('checkout');
    }

    public function getRegister(){
        return view('register');
    }

    public function getLogin(){
        return view('login');
    }

}