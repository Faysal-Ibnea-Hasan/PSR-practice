<?php

namespace App\Http\Controllers\User;
use App\DTO\User\UserDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct (UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    public function create(){
        return view('User.create_user');
    }
    public  function store(UserRequest $request){
        $user = $this->userRepository->create($request->validated());
        Session::put('success','Your Account has been created');
        return view('welcome');
    }
}
