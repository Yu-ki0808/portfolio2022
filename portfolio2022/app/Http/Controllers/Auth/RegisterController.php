<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Mail\Email_Verification;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users, unique:email_verification'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function email_validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email||unique:users,email',
        ]);
    }
    //----------------------------
    //????????????????????????????????????
    //----------------------------
    public function emailVerification(Request $request)
    {
        $validator = $this->email_validator($request->all());
        if ($validator->fails()) {
            return back()
                ->with([
                    'email' => $request->email,
                    'error' =>1,
                ])
                ->withErrors($validator);
        } else {
            $emailVerification = EmailVerification::build($request->email);
            DB::beginTransaction();
            try {
                $emailVerification->saveOrFail();
                DB::commit();
            } catch (\Throwable $e) {
                DB::rollBack();
                Log::warning("????????????????????????????????????????????????????????? {$e->getMessage()}", $e->getTrace());
                return back()
                    ->with([
                        'email' => $request->email
                    ])->withErrors(['error' => '??????????????????????????????????????????????????????'])->with(['error' =>1]);
            }
            Mail::to($request->email)->send(new Email_Verification($emailVerification));
            EmailVerification::find($request);
        }
        return back()->with(['mail' =>1]);
    }

    public function emailVerifyComplete($token)
    {
        // ?????????token???????????????
        $emailVerification = EmailVerification::findByToken($token);
        if (empty($emailVerification) || $emailVerification->isRegister()) {
            return view('errors.email_verify');
        }

        // ??????????????????????????????????????????????????????
        $emailVerification->mailVerify();

        // EmailVerifi::beginTransaction();
        try {
            // DB??????
            $emailVerification->update();
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::warning("???????????????????????????????????????????????????: email: {$emailVerification->email}", $e->getTrace());
            return redirect(route('/'))
                ->with(['message' => '???????????????????????????????????????????????????????????????????????????????????????????????????']);
        }
        return view('auth.pre_register')
            ->with(['token' => $emailVerification->token]);
    }

    protected function create_validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:4|max:20',
            'gender' => 'required|integer|max:2',
            'birthday' => 'required|string|digits:8',
            'height' => 'required|integer|max:299',
            'weight' => 'required|string|max:299',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(Request $request, $token)
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
            $emailVerification = EmailVerification::findByToken($token);
            $user = User::create([
                'name' => $request->name,
                'email' => $emailVerification->email,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'height' => $request->height,
                'weight' => $request->weight,
                'Lv' => 1,
                'EXP' => 1,
                'password' => Hash::make($request->password),
            ]);
            $emailVerification->register();
            $emailVerification->update();
            Auth::login($user);
            $user = Auth::user();
            return redirect()->route('dashboard')->with(['user' => $user]);
        }
    }
}
