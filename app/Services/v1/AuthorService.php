<?php

namespace App\Services\v1;

use App\Repositories\v1\AuthorRepository;

class AuthorService extends BaseService
{
    public function __construct(public AuthorRepository $authorRepository) {}
    public function index()
    {
        try {
            $authors = $this->authorRepository->index();
            return $this->sendSuccessResponse($authors, 'Authors retrieved successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }

    public function store($request)
    {
        try {
            $this->authorRepository->store($request);
            return $this->sendSuccessResponse(null, 'Author stored successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }

    public function show($author)
    {
        try {
            $author = $this->authorRepository->show($author);
            if (!$author) {
                return $this->sendNotFoundResponse('Author not found');
            }
            return $this->sendSuccessResponse($author, 'Author retrieved successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }

    public function update($request, $id)
    {
        try {
            $author = $this->authorRepository->updateAuthor($request, $id);
            if (!$author) {
                return $this->sendNotFoundResponse('Author not found');
            }
            return $this->sendSuccessResponse(null, 'Author updated successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $author = $this->authorRepository->destroy($id);
            if (!$author) {
                return $this->sendNotFoundResponse('Author not found');
            }
            return $this->sendSuccessResponse(null, 'Author deleted successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }
}
