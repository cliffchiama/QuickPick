<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Validate registration input.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'        => ['required', 'string', 'max:255'],
            'student_id'  => ['required', 'string', 'max:255', 'unique:users,student_id'],
            'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'    => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create the new user.
     */
    protected function create(array $data)
    {
        return User::create([
            'name'       => $data['name'],
            'student_id' => $data['student_id'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
            'role'       => 'student',  // default role ✅ Added
        ]);
    }
}