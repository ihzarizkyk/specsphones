<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;

class BrandsController extends Controller
{
    public function index()
    {
        $brand = Brands::all();
        return response()->json($brand);
    }
}
