<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;




class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();


    }
    // public function callBackFromGoogle(Request $request)
    // {

    //     $user = Socialite::driver('google')->user();
    //         $is_user = User::where('email', $user->getEmail())->first();
    //         if ($is_user) {
    //            $saveuser= User::updateOrCreate(
    //                 ['google_id' => $user->getId()],                    [
    //                     'name' => $user->getName(),
    //                     'email' => $user->getEmail(),
    //                     'password' => Hash::make($user->getName() . '@'.$user->getId())

    //                 ]
    //             );
    //         } else {
    //           $saveuser =User::where('email',$user->getEmail())->update(
    //                 [
    //                     'google_id'=> $user->getId()
    //                 ]
    //             );   
    //            $saveuser= User::where('email',$user->getEmail())->first();             
    //         }
    //         Auth::loginUsingId($saveuser->id);
    //         dd('lllll');

    //     // return redirect()->intended(RouteServiceProvider::HOME);

    //     // } catch (\Throwable $th) {
    //     //     throw $th;
    //     // }
    // }
    public function handleGoogleCallback()
    {

        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456789')

                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }

    }
}