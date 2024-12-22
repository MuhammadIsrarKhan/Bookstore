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
    public function login($request)
    {
        try {
            $token = $this->userRepository->login($request);
            $data['token'] = $token;
            return $this->sendSuccessResponse($data, 'User logged in successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }
    public function logout()
    {
        try {
            $this->userRepository->logout();
            return $this->sendSuccessResponse(null, 'User logged out successfully');
        } catch (\Throwable $e) {
            return $this->sendErrorResponse($e->getMessage());
        }
    }
}
