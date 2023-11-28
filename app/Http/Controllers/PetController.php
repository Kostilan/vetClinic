<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class PetController extends Controller
{
    public function index()
    {
        // $Pets = Pet::all();
        // dd($courses);
        return view("index",
        // [
        //     "all_recipe"=>$Pets
        // ]
    );
    }
}
