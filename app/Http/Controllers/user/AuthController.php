<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:user',
            'no_telp' => 'required|string|',
            'nama' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = UserModel::create([
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
        ]);

        $response = [
            'status' => true,
            'message' => 'Register User telah berhasil',
            'data' => $user,
        ];
        
        // return redirect('/login');
    }

    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        if ($validator->errors()->has('password')) {
            return response()->json([
                'status' => false,
                'message' => 'Password minimal harus 8 karakter!',
            ], 400);
        } else {
            return response()->json($validator->errors(), 400);
        }
    }

    $user = UserModel::where('email', $request['email'])->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('auth_token_user')->plainTextToken;

            session(['auth_token' => $token]);
            // Redirect to home page after successful login
            return redirect('/materi');

            // If you still want to return a JSON response, you can do the following:
            // return response()->json([
            //     'status' => true,
            //     'message' => 'Hi ' . $user->name . ', welcome to home',
            //     'access_token' => $token,
            //     'token_type' => 'Bearer',
            //     'seller' => $user
            // ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Email atau Password Salah!',
            ], 400);
        }
    } else {
        return response()->json([
            'status' => false,
            'message' => 'Email atau Password Salah!',
        ], 400);
    }
}


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
    
}
