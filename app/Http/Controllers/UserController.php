<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Core\Repositories\UserRepo;
use App\Http\Requests\Solicitudes;
use Auth; //ADD

class UserController extends Controller
{
    protected $UserRepo;
    public function __construct(UserRepo $UserRepo)
    {
        $this->UserRepo = $UserRepo;
    }

    public function getUsers()
    {
        $users = $this->UserRepo->getUsers();
        return view('dashboard.index', compact('users'));
    }
    public function getViews()
    {
        return view('login.index');
    }
    public function saveViews(Solicitudes $request)
    {
        return $request->email;
    }
    
}
