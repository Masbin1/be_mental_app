<?php

namespace App\Http\Controllers;

use App\Models\Depress;
use Illuminate\Http\Request;

class DepressController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $posts = Depress::all();
        return response()->json($posts);
    }
}
