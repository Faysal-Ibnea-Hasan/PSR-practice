<?php
namespace App\Repositories\User;
use App\Models\User;
use Hash;

class UserRepository implements UserRepositoryInterface
{
    public function create($request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return $user;
    }
}