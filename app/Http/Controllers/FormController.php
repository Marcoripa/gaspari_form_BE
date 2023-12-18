<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function saveFormData(Request $request) {
        Log::info('Saving form data into a json file');
        $email = $request->email;

        $userObj = (object)[];
        $userObj->firstName = $request->firstName;
        $userObj->lastName = $request->lastName;
        $userObj->email = $request->email;
        $userObj->country = $request->country;
        $userObj->isLegalAge = $request->isLegalAge;
        $userObj->password = $request->password;

        file_put_contents("personalData_$email.json", json_encode($userObj));

        return response()->json([
            'message' => "A new user $request->firstName $request->lastName has been created."
        ]);
    }
}
