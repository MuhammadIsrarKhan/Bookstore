<?php

namespace App\Repositories\v1;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    public function register($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ];
        $this->save(new User(), $data);
    }
    public function login($request)
    {
        $user = $this->findByColumn(new User(), 'email', $request->email);
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw new Exception('Invalid credentials');
        }
        return $user->createToken('token')->plainTextToken;
    }
}
