<?php

namespace App\Repositories\v1;

use App\Models\User;

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
}
