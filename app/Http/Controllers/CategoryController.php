<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showFoodBeverage()
    {
        return view('products.foodBeverage');
    }

    public function showBeautyHealth()
    {
        return view('products.beautyHealth');
    }
    public function showHomeCare()
    {
        return view('products.homeCare');
    }
    public function showBabyKid()
    {
        return view('products.babyKid');
    }
}
