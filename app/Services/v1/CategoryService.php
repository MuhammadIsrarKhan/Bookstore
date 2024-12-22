<?php

namespace App\Services\v1;

use App\Repositories\v1\CategoryRepository;
use App\Services\v1\BaseService;
use Illuminate\Support\Facades\Validator;

class CategoryService extends BaseService
{
    public function __construct(public CategoryRepository $categoryRepository) {}

    public function index()
    {
        try {
            $data = $this->categoryRepository->index();
            return $this->sendSuccessResponse($data, 'Categories retrieved successfully.');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function store($data)
    {
        try {
            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return $this->sendErrorResponse($validator->errors()->first(), 422);
            }
            $this->categoryRepository->store($data);
            return $this->sendSuccessResponse([], 'Category created successfully.', 201);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function show($id)
    {
        try {
            $data = $this->categoryRepository->show($id);
            if (!$data) {
                return $this->sendNotFoundResponse('Category not found.');
            }
            return $this->sendSuccessResponse($data, 'Category retrieved successfully.');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function update($data, $id)
    {
        try {
            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
            ]);
            if ($validator->fails()) {
                return $this->sendErrorResponse($validator->errors()->first(), 422);
            }
            $data = $this->categoryRepository->updateCategory($data, $id);
            if (!$data) {
                return $this->sendNotFoundResponse('Category not found.');
            }
            return $this->sendSuccessResponse([], 'Category updated successfully.');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $data = $this->categoryRepository->destroy($id);
            if (!$data) {
                return $this->sendNotFoundResponse('Category not found.');
            }
            return $this->sendSuccessResponse([], 'Category deleted successfully.');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
