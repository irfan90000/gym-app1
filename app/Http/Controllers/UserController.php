<?php

namespace App\Http\Controllers;

use App\Models\Health;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                $token = $user->createToken('gymapp')->accessToken;
                $message = 'user login successfully';
                $response = ['code' => 200, 'status' => true, 'user' => $user, 'token' => $token, 'message' => $message];
                return response($response);
            } else {
                return  $response = ['code' => 401, 'status' => false, 'message' => 'kindly verify your email !'];
            }
        }
        $message = 'Invalid email or password';
        $response = ['code' => 401, 'status' => false, 'token' => '', 'message' => $message];
        return response($response);
    }
    public function index()
    {
        $user = User::where('role', 'team_member')->get();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function signUp(Request $request)
    {
        $user = User::create([
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role' => 'team_member'
        ]);
        if ($user) {
            $data['message'] = 'User Added Sucessfully';
            $data['status'] = 200;
            return response()->json($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make('password'),
            'role' => 'team_member'
        ]);
        if ($user) {
            $data['message'] = 'User Added Sucessfully';
            $data['status'] = 200;
            return response()->json($data);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $health = Health::where('user_id',$id)->first();
        return response()->json($health);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = User::findorfail($id);
        return response()->json($edit);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->update([
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make('password'),
            'role' => 'team_member'
        ]);
        if ($user) {
            $data['message'] = 'User Added Sucessfully';
            $data['status'] = 200;
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = User::findorfail($id);
        $del->delete();
        return response()->json($del);
    }
}
