<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddClientRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateClientRequest;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {

        return view('admin.users.create');

    }

    public function store(AddClientRequest $request)
    {
        // if($errors)
        $user =  User::create([

            'name' => $request->first_name.' '.($request->mid_name?$request->mid_name.' ':'').$request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password,
            'image' => upload($request->image,'profile_image'),
            'drive_licence' => ($request->drive_licence?upload($request->drive_licence,'drive_licence'):null),
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'role' => $request->role,
            'OTP' => rand(1111, 9999),
        ]);
        return redirect('dashboard/list-users')->with('message','success');

    }

    public function edit()
    {
        $user = User::findOrFail(request()->id);

        return view('admin.users.edit',['user'=>$user]);

    }
    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' =>[Rule::unique('users')->where(function ($query) use ($request) {
                    return $query->where('email', '<>', $request->email);
                })],
                'mobile' =>[Rule::unique('users')->where(function ($query) use ($request) {
                    return $query->where('email', '<>', $request->email);
                })],
            ],

        );

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        };


        $user = User::where('email',$request->email)->first();
        $updatedUser = $user->update([
        'name' => $request->first_name.' '.($request->mid_name?$request->mid_name.' ':'').$request->last_name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'image' =>($request->image?upload($request->image,'profile_image'):$user->image),
        'drive_licence' =>($request->driver_licence?upload($request->drive_licence,'drive_licence'):$user->drive_licence),
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'password' => $user->password,
        'role' => $request->role,
        ]);
        if($updatedUser){

            return redirect('dashboard/list-users')->with('message','success');
        }
        return redirect('dashboard/lis')->with('message','fail');


    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id)->delete();
        return response()->json(['data'=>$user,'status'=>200,'message'=>'user has been banned successfully']);

    }
}
