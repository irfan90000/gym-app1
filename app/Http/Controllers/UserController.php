<?php

namespace App\Http\Controllers;

use App\Mail\OtpEmail;
use App\Mail\UserCouponEmail;
use App\Models\Health;
use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function getTrainers()
    {
        $trainers = User::where('role', 'team_member')->get();

        return response()->json($trainers);
    }

    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // if ($user->role == 'admin') {
            $token = $user->createToken('gymapp')->accessToken;
            $message = 'user login successfully';
            $response = ['code' => 200, 'status' => true, 'user' => $user, 'token' => $token, 'message' => $message];
            return response($response);
            // } else {
            // return  $response = ['code' => 401, 'status' => false, 'message' => 'kindly verify your email !'];
            // }
        }
        $message = 'Invalid email or password';
        $response = ['code' => 401, 'status' => false, 'token' => '', 'message' => $message];
        return response($response);
    }

    public function index()
    {
        $user = User::get();
        return response()->json($user);
    }

    public function trainers()
    {
        $user = User::where('role', 'team_member')->get();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function signUp(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $role = null;
        if($request->type == 'User')
        {
            $role = 'User';
        }
        elseif ($request->type == 'Trainer')
        {
            $role =  'team_member';
        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'role'=> $role,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        if ($user) {
            $data['message'] = 'User Added Successfully';
            $data['status'] = 200;
            return response()->json($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
        ]);
        $password = $this->generate_4_digit_otp_function();


//        if ($request->has('image')) {
//                $file = $request->has('image');
//                $originalname = $file->getClientOriginalName();
//                $path = $file->storeAs('user', $originalname);
//        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($password),
            'coupon_code' => $request->coupon_code,
//            'image' => $path,
            'role' => 'team_member'
        ]);
        if ($user) {
            Mail::to($user->email)->send(new UserCouponEmail($user));
            $data['message'] = 'Trainer Added Successfully';
            $data['status'] = 200;
            return response()->json($data);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $health = Health::where('user_id', $id)->get();
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
        $password = $this->generate_4_digit_otp_function();
        $user = User::where('id', $id)->update([
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($password),
            'role' => 'team_member'
        ]);
        if ($user) {
            $data['message'] = 'Trainer Added Sucessfully';
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

    public function otp(Request $request)
    {

        $otp = $this->generate_4_digit_otp_function();

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->otp = $otp;
            $user->save();
            Mail::to($user->email)->send(new OtpEmail($otp));
            $data['message'] = '4 Digit Otp has been sent successfully! Please check your email';
            $data['status'] = 200;
            $data['email'] = $user->email;
            return response()->json($data);
        } else {
            $data['message'] = 'Email not Found! Please enter correct email';
            $data['status'] = 401;
            return response()->json($data);
        }

    }


    private function generate_password_function()
    {
        return str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
    }

    private function generate_4_digit_otp_function()
    {
        return str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
    }

    public function resetPasswod(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8',
            'otp' => 'required|digits:4'
        ]);

        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
        if (!$user) {
            $data['message'] = 'Your opt is Incorrect, Please check your email';
            $data['status'] = 401;
            return response()->json($data);
        } else {
            $user->password = bcrypt($request->password);
            $user->save();
            $data['message'] = 'Password reset successfully';
            $data['status'] = 200;
            $data['email'] = $user->email;
            return response()->json($data);
        }
    }
}
