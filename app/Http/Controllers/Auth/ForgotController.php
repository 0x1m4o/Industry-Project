<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ForgotController extends Controller
{
    // Password.request
    public function index(){
        return view('auth.forgot', [
            'title' => 'Lupa Kata Sandi',
        ]);
    }

    // Password.email
    // public function forgot(Request $request){
    //     $request->validate([
    //         'email' => 'required|email:dns|exists:users|',
    //     ]);

    //     $status = Password::sendResetLink($request->only('email'));
        
    //     return $status === Password::RESET_LINK_SENT
    //                 ? redirect('/forgot-password')->with(['email' => $request->email])
    //                 : back()->withErrors(['email' => 'Mohon tunggu, sebelum mencoba!']);
    // }

    // Password.reset
    public function reset(){
        return view('auth.reset', [
            'title' => 'Lupa Kata Sandi',
        ]);
        // $check_email = DB::table('password_resets')
        //     ->where(['email'=>$request->email])
        //     ->where('created_at','>',Carbon::now()->subMinutes(30))
        //     ->first();

        // if($check_email){
        //     if(Hash::check($token, $check_email->token)){
        //         return view('auth.reset', [
        //             'title' => 'Reset Password',
        //             'token' => $token,
        //             'email' => $request->email,
        //         ]);
        //     } else{
        //         return response()->view('404', ['title'=>'Invalid Token', 'msg'=>'Invalid Token']);
        //     }
        // } else{
        //     return response()->view('404', ['title'=>'Invalid Token', 'msg'=>'Invalid Token']);
        // }
    }

    // Password.update
    // public function update(Request $request){
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email:dns',
    //         'password' => 'required|min:8',
    //         'password_confirmation' => 'required|same:password',
    //     ]);

    //     $status = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user, $password) {
    //             $user->forceFill([
    //                 'password' => bcrypt($password)
    //             ]);

    //             $user->save();

    //             event(new PasswordReset($user));
    //         }
    //     );

    //     Auth::guard('web')->logout();
    //     Auth::logoutOtherDevices($request->password);

    //     if($status === Password::PASSWORD_RESET){
    //         DB::table('password_resets')->where([
    //             'email'=>$request->email
    //         ])->delete();

    //         return redirect('/login')->with('changePassword', 'Kata Sandi anda telah diubah!');
    //     } else{
    //         back()->with('tokenInvalid', __($status));
    //     }
    // }
}