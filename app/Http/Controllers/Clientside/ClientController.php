<?php

namespace App\Http\Controllers\Clientside;

use App\Models\User;
use App\Mail\VerifiyEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegistrationRequest;

class ClientController extends Controller
{
    public function clientRegiseration(RegistrationRequest $request){
        // dd($request->mobile);
        $client = User::create([
            'name' => $request->first_name.' '.($request->mid_name?$request->mid_name.' ':'').$request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => $request->password,
            'image' => upload($request->image,'profile_image'),
            'drive_licence' => ($request->driver_licence?upload($request->drive_licence,'drive_licence'):null),
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'OTP' => rand(1111, 9999),

        ]);

        Mail::to($client->email)
        ->send(new VerifiyEmail($client->OTP));

        return  new UserResource($client);

    }



    public function veryifiyEmail(Request $request)
    {
        $credentials = $request->only('email', 'otp');
        $user = User::where('email',$request->email)->where('otp',$request->otp)->first();
        if ($user) {

            $user->update([
                $user->email_verified_at = now(),
                $user->otp = null,
            ]);

        return response()->json(['data'=>'',200,'messege'=>'email verified successfuly']);
    }
    return response()->json(['data'=>'',200,'messege'=>'email or th code is ']);

    }

}
