<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
                'rememberme' => 'nullable|boolean',
            ]);

            $credentials = $request->only('email', 'password');
            $remember = $request->input('rememberme', false);

            if (auth()->attempt($credentials, $remember)) {
                $user = User::find(Auth::user()->id);
                $user->last_login_at = Carbon::now()->toDateTimeString();
                $user->last_login_ip = $request->getClientIp();
                $user->city = (string) geoip()->getLocation($request->getClientIp())['city'];
                $user->state = (string) geoip()->getLocation($request->getClientIp())['state'];
                $user->iso_code = (string) geoip()->getLocation($request->getClientIp())['iso_code']; // 'US
                $user->country = (string) geoip()->getLocation($request->getClientIp())['country'];
                $user->timezone = (string) geoip()->getLocation($request->getClientIp())['timezone'];
                $user->save();

                return redirect()->intended('/');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        
        return view('auth.signin');
    }

    public function signup(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|same:password_confirmation',
                'agree_terms' => 'required|accepted',
            ]);

            $user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'agree_terms' => true,
                'last_login_at' => Carbon::now()->toDateTimeString(),
                'last_login_ip' => $request->getClientIp(),
                'city' => (string) geoip()->getLocation($request->getClientIp())['city'],
                'state' => (string) geoip()->getLocation($request->getClientIp())['state'],
                'iso_code' => (string) geoip()->getLocation($request->getClientIp())['iso_code'], // 'US
                'country' => (string) geoip()->getLocation($request->getClientIp())['country'],
                'timezone' => (string) geoip()->getLocation($request->getClientIp())['timezone'],
            ]);

            auth()->login($user);

            // return redirect()->intended('/');
            return redirect()->route('auth.choose-username');
        }

        return view('auth.signup');
    }

    public function chooseUsername(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'username' => 'required|string|unique:users,username',
            ]);

            $user = User::find(Auth::id());
            $user->username = $request->input('username');
            $user->save();

            return redirect()->intended('/');
        }

        return view('auth.choose-username');
    }

    public function settings(Request $request)
    {
        $user = User::find(Auth::id());

        if ($request->isMethod('post')) {
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:users,email,' . Auth::id(),
            ]);

            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');

            if ($user->email !== $request->input('email')) {
                $user->email = $request->input('email');
                $user->email_verified_at = null;
            }

            $user->save();
        }

        return view('auth.settings', compact('user'));
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find(Auth::id());

        $avatarName = $user->id . '_avatar' . time() . '.' . $request->avatar->extension();
        $request->avatar->move(storage_path('app/public/uploads/avatars'), $avatarName);

        // save path to database
        $user->avatar = '/storage/uploads/avatars/' . $avatarName;
        $user->save();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Avatar uploaded successfully.',
                'avatar' => $user->avatar,
            ]);
        }

        return redirect()->back()->with('success', 'Avatar uploaded successfully.');
    }

    public function uploadCover(Request $request)
    {
        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find(Auth::id());

        $coverName = $user->id . '_cover' . time() . '.' . $request->cover->extension();
        $request->cover->move(storage_path('app/public/uploads/covers'), $coverName);

        // save path to database
        $user->cover = '/storage/uploads/covers/' . $coverName;
        $user->save();

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Cover uploaded successfully.',
                'cover' => $user->cover,
            ]);
        }

        return redirect()->back()->with('success', 'Cover uploaded successfully.');
    }

    public function signout()
    {
        auth()->logout();
        return redirect()->route('auth.signin');
    }
}
