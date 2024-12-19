<?php

namespace App\Services\v1;

use App\Repositories\v1\UserRepository;

class UserService extends BaseService
{
    public function __construct(public UserRepository $userRepository) {}
    public function register($request)
    {
        try {
            $this->userRepository->register($request);
            return $this->sendSuccessResponse(null, 'User registered successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }
}
