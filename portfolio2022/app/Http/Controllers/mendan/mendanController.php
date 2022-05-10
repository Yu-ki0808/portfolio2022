<?php

namespace App\Http\Controllers\mendan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Mendan_user;

class mendanController extends Controller
{
    public function index(){
        return view('mendan.index');
    }

    protected function create_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:4|max:20',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    protected function store(Request $request)
    {
        $validator = $this->create_validator($request->all());
        if ($validator->fails()) {
            return back()
                ->with([
                    'token' => $request->token,
                    'name' => $request->name,
                ])
                ->withErrors($validator);
        } else {
            $user = Mendan_user::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);
            $user = Auth::user();
            return redirect()->route('/mendan/home')->with(['user' => $user]);
        }
    }
    public function home(){
        return view('mendan.home');
    }
}
