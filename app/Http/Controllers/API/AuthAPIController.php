<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthAPIController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth:api',['except' => ['login']]);
   }

   public function login()
   {
       $credentials = request(['email','password']);
       if(! $token = auth('api')->attempt($credentials)){
           return response()->json([
               'Error' => 'Authorization'
           ],401);
       }

       return $this->getJWTWithToken($token);
   }

   public function logout()
   {
       auth('api')->logout();
       return response()->json(['message' => 'Successfully logged out']);
   }

   public function refresh()
   {
       return $this->getJWTWithToken(auth('api')->refresh());
   }

   public function me()
   {
        return response()->json(auth('api')->user());
   }

   public function getJWTWithToken($token)
   {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 6000,
            'users' => auth('api')->user()
        
        ]);
   }
}