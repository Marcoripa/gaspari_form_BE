<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function saveFormData(Request $request) {
        Log::info('Saving form data into a json file');
        $email = $request['email'];

        file_put_contents("personalData_$email.json", json_encode($request));
        return 'DONE';
    }
}
