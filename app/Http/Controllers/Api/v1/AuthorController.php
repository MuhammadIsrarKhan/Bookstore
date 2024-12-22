<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreAuthorRequest;
use App\Services\v1\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct(public AuthorService $authorService) {}
    public function index()
    {
        return $this->authorService->index();
    }

    public function store(StoreAuthorRequest $request)
    {
        return $this->authorService->store($request);
    }

    public function show($request)
    {
        return $this->authorService->show($request);
    }

    public function update(StoreAuthorRequest $request, $id)
    {
        return $this->authorService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->authorService->destroy($id);
    }
}
