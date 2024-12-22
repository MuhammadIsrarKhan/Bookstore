<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Books index'
        ]);
    }

    public function store()
    {
        return response()->json([
            'message' => 'Books store'
        ]);
    }

    public function show($book)
    {
        return response()->json([
            'message' => 'Books show'
        ]);
    }

    public function update($book)
    {
        return response()->json([
            'message' => 'Books update'
        ]);
    }

    public function destroy($book)
    {
        return response()->json([
            'message' => 'Books destroy'
        ]);
    }
}
