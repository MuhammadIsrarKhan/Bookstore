<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\LoginRequest;
use App\Http\Requests\v1\StoreUserRequest;
use App\Services\v1\UserService;


class AuthController extends Controller
{
    public function __construct(public UserService $userService) {}
    public function register(StoreUserRequest $request)
    {
        return $this->userService->register($request);
    }
    public function login(LoginRequest $request)
    {
        return $this->userService->login($request);
    }
}
