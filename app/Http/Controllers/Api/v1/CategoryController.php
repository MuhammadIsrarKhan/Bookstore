<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\v1\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(public CategoryService $categoryService) {}
    public function index()
    {
        return $this->categoryService->index();
    }
    public function store(Request $request)
    {
        return $this->categoryService->store($request->all());
    }
    public function show($id)
    {
        return $this->categoryService->show($id);
    }
    public function update(Request $request, $id)
    {
        return $this->categoryService->update($request->all(), $id);
    }
    public function destroy($id)
    {
        return $this->categoryService->destroy($id);
    }
}
